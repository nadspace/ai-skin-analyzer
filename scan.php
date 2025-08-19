<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skin Scanner - AiSYA SMART SKIN</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/face-api.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tensorflow-models/mobilenet"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        
        :root {
            --primary: #1976d2;
            --primary-light: #64b5f6;
            --secondary: #e3f2fd;
            --text-dark: #333;
            --text-light: #fff;
            --border-radius: 12px;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--secondary);
            color: var(--text-dark);
            line-height: 1.6;
        }
        
        header {
            background: linear-gradient(135deg, var(--primary), var(--primary-light));
            padding: 1.5rem 0;
            color: var(--text-light);
            text-align: center;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        
        .logo {
            font-size: 2rem;
            font-weight: 700;
        }
        
        .container {
            max-width: 900px;
            margin: 2rem auto;
            padding: 0 1rem;
        }
        
        .card {
            background: white;
            border-radius: var(--border-radius);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            margin-bottom: 2rem;
        }
        
        .intro {
            text-align: center;
            margin-bottom: 1.5rem;
        }
        
        .intro h2 {
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: var(--primary);
        }
        
        .intro p {
            color: #666;
        }
        
        .scan-container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        
        .scan-area {
            position: relative;
            width: 100%;
            max-width: 450px;
            margin: 0 auto;
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }
        
        video {
            width: 100%;
            display: block;
            transform: scale(1);
            transition: transform 0.3s ease;
        }
        
        canvas {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
        
        .controls {
            display: flex;
            justify-content: center;
            margin: 1rem 0;
            gap: 0.5rem;
        }
        
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0.7rem 1.5rem;
            background-color: var(--primary);
            color: var(--text-light);
            border: none;
            border-radius: 50px;
            font-size: 1rem;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            gap: 0.5rem;
        }
        
        .btn:hover {
            background-color: var(--primary-light);
            transform: translateY(-2px);
        }
        
        .btn-icon {
            width: 40px;
            height: 40px;
            padding: 0;
            border-radius: 50%;
        }
        
        .btn-primary {
            background-color: var(--primary);
        }
        
        .btn-secondary {
            background-color: #f0f0f0;
            color: var(--text-dark);
        }
        
        .upload-section {
            margin-top: 2rem;
            text-align: center;
            padding-top: 1.5rem;
            border-top: 1px solid #eee;
        }
        
        .file-input-wrapper {
            position: relative;
            display: inline-block;
            margin: 1rem 0;
        }
        
        .file-input {
            position: absolute;
            left: 0;
            top: 0;
            opacity: 0;
            width: 100%;
            height: 100%;
            cursor: pointer;
        }
        
        .file-input-label {
            display: inline-flex;
            align-items: center;
            padding: 0.7rem 1.5rem;
            background-color: #f0f0f0;
            color: var(--text-dark);
            border-radius: 50px;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            gap: 0.5rem;
        }
        
        .file-input-label:hover {
            background-color: #e0e0e0;
        }
        
        .file-name {
            margin-left: 1rem;
            font-size: 0.9rem;
            color: #666;
        }
        
        .divider {
            display: flex;
            align-items: center;
            text-align: center;
            margin: 2rem 0;
        }
        
        .divider::before,
        .divider::after {
            content: '';
            flex: 1;
            border-bottom: 1px solid #eee;
        }
        
        .divider span {
            padding: 0 10px;
            color: #666;
            font-size: 0.9rem;
        }
        
        @media (max-width: 768px) {
            .container {
                padding: 0 1rem;
            }
            .card {
                padding: 1.5rem;
            }
        }
    </style>
</head>
<body>
    
    <header>
        <div class="logo">AiSYA SMART SKIN</div>
    </header>
    
    <div class="container">
        <div class="card">
            <div class="intro">
                <h2>Skin Scanner</h2>
                <p>Analyze your skin condition by scanning your face or uploading an image</p>
            </div>
            
            <div class="scan-container">
                <div class="scan-area">
                    <video id="camera" autoplay></video>
                    <canvas id="faceOverlay"></canvas>
                </div>
                
                <div class="controls">
                    <button class="btn btn-icon btn-secondary" onclick="zoomOut()"><i class="fas fa-search-minus"></i></button>
                    <button class="btn btn-icon btn-secondary" onclick="zoomIn()"><i class="fas fa-search-plus"></i></button>
                    <button class="btn btn-icon btn-secondary" onclick="flipCamera()"><i class="fas fa-sync-alt"></i></button>
                </div>
                
                <button class="btn btn-primary" onclick="captureImage()">
                    <i class="fas fa-camera"></i> Scan Now
                </button>
            </div>
            
            <div class="divider">
                <span>OR</span>
            </div>
            
            <div class="upload-section">
                <h3>Upload an Image</h3>
                <form id="uploadForm" enctype="multipart/form-data">
                    <div class="file-input-wrapper">
                        <label class="file-input-label">
                            <i class="fas fa-upload"></i> Choose Image
                            <input type="file" name="skin_image" accept="image/*" id="skinImage" class="file-input">
                        </label>
                        <span id="fileName" class="file-name"></span>
                    </div>
                    <button type="button" class="btn btn-primary" onclick="uploadImage()">
                        <i class="fas fa-check"></i> Analyze Image
                    </button>
                </form>
            </div>
        </div>
    </div>

    <script>
        let video = document.getElementById('camera');
        let canvas = document.getElementById('faceOverlay');
        let context = canvas.getContext('2d');
        let currentFacingMode = "user";
        let fileInput = document.getElementById('skinImage');
        let fileNameSpan = document.getElementById('fileName');

        // Update file name display when file is selected
        fileInput.addEventListener('change', function() {
            if (this.files && this.files[0]) {
                fileNameSpan.textContent = this.files[0].name;
            } else {
                fileNameSpan.textContent = '';
            }
        });

        // Set canvas dimensions on video load
        video.addEventListener('loadedmetadata', function() {
            canvas.width = video.videoWidth;
            canvas.height = video.videoHeight;
        });

        async function startCamera() {
            try {
                const constraints = { 
                    video: { 
                        facingMode: currentFacingMode,
                        width: { ideal: 1280 },
                        height: { ideal: 720 }
                    } 
                };
                const stream = await navigator.mediaDevices.getUserMedia(constraints);
                video.srcObject = stream;
                
                // Set canvas dimensions once video is playing
                video.onplaying = () => {
                    canvas.width = video.videoWidth;
                    canvas.height = video.videoHeight;
                };
            } catch (error) {
                console.error("Camera error:", error);
                alert("Error accessing the camera: " + error.message);
            }
        }

        function flipCamera() {
            if (video.srcObject) {
                // Stop all tracks of the current stream
                video.srcObject.getTracks().forEach(track => track.stop());
            }
            
            currentFacingMode = currentFacingMode === "user" ? "environment" : "user";
            startCamera();
        }

        function zoomIn() {
            let currentScale = parseFloat(video.style.transform.replace('scale(', '').replace(')', '')) || 1;
            if (currentScale < 2) { // Limit max zoom
                video.style.transform = `scale(${currentScale + 0.1})`;
            }
        }

        function zoomOut() {
            let currentScale = parseFloat(video.style.transform.replace('scale(', '').replace(')', '')) || 1;
            if (currentScale > 1) { // Don't go below original size
                video.style.transform = `scale(${currentScale - 0.1})`;
            }
        }

        function captureImage() {
            let canvasCapture = document.createElement("canvas");
            let contextCapture = canvasCapture.getContext("2d");
            canvasCapture.width = video.videoWidth;
            canvasCapture.height = video.videoHeight;
            contextCapture.drawImage(video, 0, 0, canvasCapture.width, canvasCapture.height);

            let imageData = canvasCapture.toDataURL("image/png");

            let xhr = new XMLHttpRequest();
            xhr.open("POST", "process_scan.php", true);
            xhr.setRequestHeader("Content-Type", "application/json");

            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4) {
                    if (xhr.status === 200) {
                        try {
                            let response = JSON.parse(xhr.responseText);
                            if (response.success) {
                                window.location.href = response.redirect;
                            } else {
                                alert("Error: " + response.error);
                            }
                        } catch (e) {
                            console.error("Error parsing response:", e);
                            alert("An error occurred while processing the scan.");
                        }
                    } else {
                        alert("Server error: " + xhr.status);
                    }
                }
            };

            let jsonData = JSON.stringify({ captured_image: imageData });
            xhr.send(jsonData);
        }

        function uploadImage() {
            const file = fileInput.files[0];

            if (!file) {
                alert("Please select an image to upload.");
                return;
            }

            // Validate file size (max 5MB)
            if (file.size > 5 * 1024 * 1024) {
                alert("File size must be less than 5MB.");
                return;
            }

            // Validate file type
            const allowedTypes = ["image/jpeg", "image/png", "image/jpg"];
            if (!allowedTypes.includes(file.type)) {
                alert("Only JPG, JPEG, and PNG files are allowed.");
                return;
            }

            const formData = new FormData();
            formData.append('skin_image', file);

            // Show loading indicator
            const uploadButton = document.querySelector('.upload-section .btn');
            const originalButtonText = uploadButton.innerHTML;
            uploadButton.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Processing...';
            uploadButton.disabled = true;

            fetch('process_scan.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    window.location.href = data.redirect;
                } else {
                    alert("Error: " + data.error);
                    // Reset button
                    uploadButton.innerHTML = originalButtonText;
                    uploadButton.disabled = false;
                }
            })
            .catch(error => {
                console.error("Error uploading image:", error);
                alert("An error occurred while uploading the image.");
                // Reset button
                uploadButton.innerHTML = originalButtonText;
                uploadButton.disabled = false;
            });
        }

        // Initialize on page load
        window.onload = function() {
            startCamera();
            
            // Resize canvas when window is resized
            window.addEventListener('resize', function() {
                if (video.videoWidth) {
                    canvas.width = video.videoWidth;
                    canvas.height = video.videoHeight;
                }
            });
        }
    </script>
</body>
</html>