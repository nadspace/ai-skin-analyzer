# AiSYA SMART SKIN

An AI-powered skin analysis and skincare recommendation system that helps users analyze their skin condition and receive personalized product recommendations.

## Features

- **AI Skin Analysis**: Upload photos for automated skin condition analysis
- **Personalized Recommendations**: Get tailored skincare product suggestions
- **Product Database**: Comprehensive database of skincare products
- **User Reviews**: Read and submit product reviews
- **Skincare Routines**: Customized skincare routine recommendations
- **Interactive Interface**: User-friendly web interface with modern design

## Technology Stack

- **Frontend**: HTML, CSS, JavaScript
- **Backend**: PHP
- **Database**: MySQL
- **AI/ML**: Python with TensorFlow/Keras
- **Image Processing**: Computer vision for skin analysis

## Project Structure

```
├── index.php              # Main homepage
├── scan.php              # Skin scanning interface
├── scan_results.php      # Analysis results display
├── products.php          # Product catalog
├── recommendation.php    # Recommendation engine
├── review.php           # Product reviews
├── analyze_skin.py      # Python skin analysis script
├── skin_analyzer.py     # Core analysis algorithms
├── models/              # AI model files
├── images/              # Product images
├── dataset/             # Training data
├── uploads/             # User uploaded images
└── config.php           # Database configuration
```

## Setup Instructions

### Prerequisites

- PHP 7.4 or higher
- MySQL 5.7 or higher
- Python 3.7+ with required packages
- Web server (Apache/Nginx)

### Installation

1. Clone the repository:
```bash
git clone https://github.com/nadspace/aisya-smart-skin.git
cd aisya-smart-skin
```

2. Set up the database:
```bash
mysql -u your_username -p < asya_smart_skin.sql
```

3. Configure database connection:
   - Update `config.php` with your database credentials

4. Install Python dependencies:
```bash
pip install tensorflow opencv-python numpy
```

5. Set up web server to serve the project directory

## Usage

1. Navigate to the application in your web browser
2. Upload a photo of your skin for analysis
3. View the AI-generated analysis results
4. Browse recommended products based on your skin type
5. Read reviews and create skincare routines

## Contributing

1. Fork the repository
2. Create a feature branch
3. Make your changes
4. Submit a pull request

## License

This project is licensed under the MIT License.

## Contact

For questions or support, please open an issue on GitHub.
