import sys
import cv2
import numpy as np
import json
import os
from datetime import datetime

def analyze_skin(image_path):
    # Baca imej
    img = cv2.imread(image_path)
    if img is None:
        return {"error": "Cannot read image file"}
    
    # Tukar ke RGB (OpenCV menggunakan BGR)
    img_rgb = cv2.cvtColor(img, cv2.COLOR_BGR2RGB)
    
    # Tukar ke ruang warna HSV untuk pengesanan warna yang lebih baik
    img_hsv = cv2.cvtColor(img_rgb, cv2.COLOR_RGB2HSV)
    
    # Julat warna untuk mengesan kemerahan (seperti jerawat)
    lower_red = np.array([0, 70, 50])  
    upper_red = np.array([10, 255, 255])
    
    # Julat kedua untuk merah (HSV adalah bulatan)
    lower_red2 = np.array([170, 70, 50])
    upper_red2 = np.array([180, 255, 255])
    
    # Buat topeng untuk kawasan merah
    mask1 = cv2.inRange(img_hsv, lower_red, upper_red)
    mask2 = cv2.inRange(img_hsv, lower_red2, upper_red2)
    mask = mask1 + mask2
    
    # Lakukan operasi morfologi untuk membersihkan topeng
    kernel = np.ones((5, 5), np.uint8)
    mask = cv2.morphologyEx(mask, cv2.MORPH_OPEN, kernel)
    mask = cv2.morphologyEx(mask, cv2.MORPH_CLOSE, kernel)
    
    # Cari kontur (untuk mencari jerawat)
    contours, _ = cv2.findContours(mask, cv2.RETR_EXTERNAL, cv2.CHAIN_APPROX_SIMPLE)
    
    # Saringan kontur berdasarkan saiz
    min_area = 20  # Kawasan minimum dalam piksel
    max_area = 1000  # Kawasan maksimum dalam piksel
    valid_contours = []
    
    for contour in contours:
        area = cv2.contourArea(contour)
        if min_area < area < max_area:
            valid_contours.append(contour)
    
    # Lukis kontur pada imej untuk output
    result_img = img.copy()
    cv2.drawContours(result_img, valid_contours, -1, (0, 255, 0), 2)
    
    # Simpan imej dengan kontur jerawat
    result_dir = "results"
    if not os.path.exists(result_dir):
        os.makedirs(result_dir)
    
    timestamp = datetime.now().strftime("%Y%m%d_%H%M%S")
    result_path = os.path.join(result_dir, f"analyzed_{timestamp}.jpg")
    cv2.imwrite(result_path, result_img)
    
    # Kira bilangan jerawat
    acne_count = len(valid_contours)
    
    # Analisis untuk menentukan jenis kulit dan keadaan kulit
    # Ini adalah versi ringkas, boleh dipertingkatkan
    
    # Tentukan jenis kulit berdasarkan kawasan berminyak
    hsv = cv2.cvtColor(img, cv2.COLOR_BGR2HSV)
    
    # Deteksi kawasan berminyak (lebih terang)
    lower_bright = np.array([0, 0, 200])
    upper_bright = np.array([180, 30, 255])
    mask_bright = cv2.inRange(hsv, lower_bright, upper_bright)
    
    # Kira peratusan piksel berminyak
    oily_percentage = (cv2.countNonZero(mask_bright) / (img.shape[0] * img.shape[1])) * 100
    
    # Tentukan jenis kulit
    if acne_count > 5:
        skin_type = "Acne-Prone"
    elif oily_percentage > 15:
        skin_type = "Oily"
    elif oily_percentage > 10:
        skin_type = "Combination"
    elif oily_percentage < 5:
        skin_type = "Dry"
    else:
        skin_type = "Normal"
    
    # Tentukan keadaan kulit
    if acne_count > 5:
        skin_condition = "Acne"
    elif oily_percentage > 15:
        skin_condition = "Oily Skin"
    else:
        skin_condition = "Smooth"
    
    # Maklumat tambahan untuk analisis
    analysis_details = {
        "acne_areas": {
            "forehead": sum(1 for c in valid_contours if cv2.boundingRect(c)[1] < img.shape[0] * 0.33),
            "cheeks": sum(1 for c in valid_contours if cv2.boundingRect(c)[1] >= img.shape[0] * 0.33 and cv2.boundingRect(c)[1] < img.shape[0] * 0.66),
            "chin": sum(1 for c in valid_contours if cv2.boundingRect(c)[1] >= img.shape[0] * 0.66)
        },
        "oily_percentage": round(oily_percentage, 2),
        "detected_features": {
            "red_areas": cv2.countNonZero(mask) > 500,
            "oily_areas": oily_percentage > 10
        },
        "analyzed_image_path": result_path
    }
    
    # Return results as JSON
    return {
        "skin_type": skin_type,
        "skin_condition": skin_condition,
        "acne_count": acne_count,
        "analysis_details": analysis_details
    }

# Main execution
if __name__ == "__main__":
    if len(sys.argv) != 2:
        print(json.dumps({"error": "Usage: python skin_analyzer.py <image_path>"}))
        sys.exit(1)
    
    image_path = sys.argv[1]
    result = analyze_skin(image_path)
    print(json.dumps(result))