import tensorflow as tf
import cv2
import numpy as np
import sys

# Load the pre-trained model
model = tf.keras.models.load_model("pretrained_skin_model.h5")

# Define skin type labels (depends on the model)
labels = ["Oily", "Dry", "Combination", "Sensitive", "Normal"]

# Load the input image
image_path = sys.argv[1]
image = cv2.imread(image_path)
image = cv2.resize(image, (224, 224))  # Resize to match model input size
image = np.expand_dims(image, axis=0) / 255.0  # Normalize

# Predict skin type
prediction = model.predict(image)
result = labels[np.argmax(prediction)]  # Get the highest probability class

# Output the result for PHP to read
print(result)
