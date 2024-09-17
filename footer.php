<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer Example</title>
    <style>
        @font-face {
            font-family: 'General Sans Bold';
            src: url('fonts/GeneralSans-Bold.otf') format('opentype');
        }

        @font-face {
            font-family: 'HighriseBold';
            src: url('fonts/HighriseDemoBold700.otf') format('opentype');
        }

        .container-wrapper {
            max-width: 1440px;
            margin: 0 auto;
            padding: 20px;
        }

        footer {
            padding: 20px 0;
            text-align: center;
            color: #333;
            font-family: sans-serif; /* Changed to a regular sans-serif font */
            background-color: #F2EEE3;
        }

        .footer-boxes {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 20px;
            margin-bottom: 40px;
        }

        .footer-box {
            flex: 1;
            min-width: 320px;
            padding: 80px;
            border-radius: 5px;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            position: relative;
            cursor: pointer;
            text-decoration: none;
        }

        .footer-box p {
            font-family: 'HighriseBold', sans-serif; /* Bold font inside the boxes */
            font-size: 35px;
            margin: 0; /* Remove default margin */
            position: absolute;
            bottom: 10px;
            left: 10px;
        }

        .transparent-box {
            background-color: transparent;
            border: 2px solid #000;
            color: #000;
        }

        .filled-box {
            background-color: #000;
            color: #FFF;
        }

        .footer-box::after {
            content: '→';
            font-size: 24px;
            position: absolute;
            bottom: 10px;
            right: 10px;
        }

        .footer-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: space-between;
        }

        .footer-section {
            flex: 1 1 45%; /* Each section will take up 45% of the row, adjusting for gap */
            min-width: 200px; /* Minimum width to maintain layout on smaller screens */
            text-align: left;
        }

        .footer-section h2 {
            font-family: sans-serif; /* Regular font */
            font-size: 14px;
            margin-bottom: 5px;
        }

        .footer-section ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer-section ul li {
            margin-bottom: 5px;
        }

        .footer-section ul li a {
            text-decoration: none;
            color: #333;
            font-size: 12px;
        }

        .dealer-section {
            display: flex;
            flex-direction: column;
            text-align: left;
            flex: 1;
            min-width: 150px;
        }

        .dealer-section p {
            font-family: sans-serif; /* Regular font */
            font-size: 14px;
            margin-bottom: 10px;
        }

        .contact-button {
            padding: 10px 20px;
            background-color: #000;
            color: #FFF;
            text-decoration: none;
            font-family: sans-serif; /* Regular font */
            font-size: 12px;
            border: none;
            cursor: pointer;
            width: 100%;
            text-align: left;
            position: relative;
        }

        .contact-button::after {
            content: '→';
            font-size: 24px;
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
        }

        .footer-bottom {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-top: 1px solid #999;
            padding-top: 20px;
            margin-top: 20px;
            font-size: 12px;
            color: #000; /* Changed color to black */
        }

        .footer-bottom .left {
            text-align: left;
            flex: 1;
        }

        .footer-bottom .right {
            text-align: right;
            flex: 1;
        }

        @media (max-width: 768px) {
            .footer-boxes {
                flex-direction: column;
            }

            .footer-container {
                flex-direction: row;
                flex-wrap: wrap;
                justify-content: space-between;
            }

            .footer-section,
            .dealer-section {
                min-width: 45%;
            }

            .contact-button {
                text-align: left;
            }

            .footer-bottom {
                flex-direction: column;
                text-align: center;
            }

            .footer-bottom .left,
            .footer-bottom .right {
                text-align: center;
                flex: none;
            }
        }

        @media (max-width: 480px) {
            .footer-container {
                flex-direction: column;
                align-items: flex-start;
            }
            .footer-section {
                width: 100%;
            }

            .footer-section ul li {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <footer>
        <div class="container-wrapper">
            <div class="footer-boxes">
                <a href="product.php" class="footer-box transparent-box">
                    <p>Discover Our Store</p>
                </a>
                <a href="product.php" class="footer-box filled-box">
                    <p>Explore Our Products</p>
                </a>
            </div>
            <div class="footer-container">
                <div class="footer-section">
                    <h2>PRODUCTS</h2>
                    <ul>
                        <li><a href="#link1">Headlights</a></li>
                        <li><a href="#link2">Rearlights</a></li>
                        <li><a href="#link3">Windshield</a></li>
                        <li><a href="#link3.5">Helmet Visor</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h2>ABOUT</h2>
                    <ul>
                        <li><a href="product.php">Our Products</a></li>
                        <li><a href="index.php">About GMA</a></li>
                        <li><a href="contactus.php">Contact Us</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h2>SOCIAL MEDIA</h2>
                    <ul>
                        <li><a href="#link7">INSTAGRAM</a></li>
                        <li><a href="#link8">YOUTUBE</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h2>ONLINE SHOP</h2>
                    <ul>
                        <li><a href="#link10">TOKOPEDIA</a></li>
                        <li><a href="#link11">SHOPEE</a></li>
                    </ul>
                </div>
                <div class="dealer-section">
                    <p>Want to become a dealer?</p>
                    <a href="contactus.php" class="contact-button">Contact Us</a>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="left">
                    Designed & Developed by GMA Product Series
                </div>
                <div class="right">
                    &copy; 2024 GMA Products Series. All rights reserved.
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
