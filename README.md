# AiSYA SMART SKIN

An AI-powered skin analysis web application that helps users analyze their skin condition and receive personalized skincare recommendations. This is a static web application that runs entirely in the browser.

## Features

- **AI Skin Analysis**: Upload photos or use camera for automated skin condition analysis
- **Personalized Recommendations**: Get tailored skincare suggestions based on analysis
- **Real-time Camera Capture**: Use your device camera for instant skin analysis
- **Responsive Design**: Works on desktop and mobile devices
- **No Server Required**: Runs entirely in the browser using client-side JavaScript

## Technology Stack

- **Frontend**: HTML5, CSS3, JavaScript (ES6+)
- **AI/ML**: TensorFlow.js for client-side machine learning
- **Image Processing**: Canvas API for image manipulation
- **Camera Access**: WebRTC MediaDevices API

## Project Structure

```
├── index.html           # Main homepage
├── scan.html           # Skin scanning interface
├── images/             # UI and product images
├── video/              # Demo videos
├── uploads/            # User uploaded images (for demo)
└── README.md           # Project documentation
```

## Live Demo

Visit the live application: [https://nadspace.github.io/ai-skin-analyzer/](https://nadspace.github.io/ai-skin-analyzer/)

## Setup Instructions

### Prerequisites

- Modern web browser with JavaScript enabled
- Camera access (optional, for real-time capture)
- Internet connection (for TensorFlow.js CDN)

### Installation

1. Clone the repository:
```bash
git clone https://github.com/nadspace/ai-skin-analyzer.git
cd ai-skin-analyzer
```

2. Open `index.html` in your web browser, or serve it using a local server:
```bash
# Using Python
python -m http.server 8000

# Using Node.js
npx serve .

# Using PHP
php -S localhost:8000
```

3. Navigate to `http://localhost:8000` in your browser

## Usage

1. Open the application in your web browser
2. Click "Start Skin Analysis" or navigate to the scanner
3. Upload a photo or use your camera to capture an image
4. Click "Analyze Skin" to get AI-powered results
5. View your skin type and personalized recommendations

## Features in Detail

### AI Skin Analysis
- Uses TensorFlow.js for client-side machine learning
- Analyzes uploaded images to determine skin type
- Provides confidence scores and detailed analysis

### Camera Integration
- Real-time camera access using WebRTC
- Capture photos directly in the browser
- Works on both desktop and mobile devices

### Responsive Design
- Mobile-first responsive design
- Touch-friendly interface
- Optimized for various screen sizes

## Browser Compatibility

- Chrome 60+
- Firefox 55+
- Safari 11+
- Edge 79+

## Contributing

1. Fork the repository
2. Create a feature branch
3. Make your changes
4. Submit a pull request

## License

This project is licensed under the MIT License.

## Contact

For questions or support, please open an issue on GitHub.
