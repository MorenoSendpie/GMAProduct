<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help Section</title>
    <style>
        @font-face {
            font-family: 'HighriseDemoBold';
            src: url('fonts/HighriseDemoBold700.otf') format('opentype');
        }

        @font-face {
            font-family: 'GeneralSans';
            src: url('fonts/GeneralSans-Regular.otf') format('opentype');
        }

        @font-face {
            font-family: 'GeneralSans-Semibold';
            src: url('fonts/GeneralSans-Semibold.otf') format('opentype'); /* Adjust the path to the font file */
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: 'GeneralSans', sans-serif;
            background-color: #10100E;
            color: #F2EEE3;
        }

        .help-section {
            background-color: #10100E;
            padding: 60px 60px 60px 60px;
        }

        .help-section h1 {
            font-family: 'HighriseDemoBold', sans-serif;
            color: #F2EEE3;
            font-size: 80px;
            text-align: left;
            margin-left: 0;
        }

        .help-section p {
            font-family: 'GeneralSans', sans-serif;
            color: #F2EEE3;
            font-size: 18px;
            max-width: 600px;
            margin: 20px 0;
            text-align: left;
        }

        .contact-section {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            background-color: #10100E;
            padding: 0 60px 60px 60px;
        }

        .contact-method {
            flex: 1 1 200px;
            margin: 10px;
        }

        .contact-section h2 {
            font-family: 'HighriseDemoBold', sans-serif;
            color: #F2EEE3;
            font-size: 24px;
            text-align: left;
            margin: 0 0 20px 0;
        }

        .contact-section ul {
            list-style-type: none;
            padding: 0;
            background-color: #10100E;
            margin: 0;
        }

        .contact-section li {
            font-family: 'GeneralSans', sans-serif;
            color: #F2EEE3;
            font-size: 14px;
            margin-bottom: 10px;
            background-color: #10100E;
        }

        .contact-section a {
            color: #F2EEE3;
            text-decoration: none;
            background-color: #10100E;
            font-family: 'GeneralSans', sans-serif;
        }

        .moving-word-container {
            background-color: yellow; /* Set the background color to yellow */
            font-family: 'GeneralSans-Semibold', sans-serif; /* Apply the custom font */
            text-align: center; /* Center align the text */
            padding: 10px 0; /* Adjusted padding */
            white-space: nowrap; /* Prevent line breaks */
            overflow: hidden; /* Hide overflow content */
        }

        .moving-word {
            display: inline-block;
            animation: moveRight 20s linear infinite; /* Apply the animation */
        }

        .moving-word-item {
            color: #000; /* Set text color to black */
            font-size: 20px;
            display: inline-block;
        }

        @keyframes moveRight {
            0% {
                transform: translateX(-40%); /* Start position off-screen to the right */
            }
            100% {
                transform: translateX(0%); /* End position off-screen to the left */
            }
        }

        .dot {
            width: 10px; /* Adjust dot size */
            height: 10px; /* Adjust dot size */
            background-color: #000; /* Set dot color */
            border-radius: 50%; /* Make the dot round */
            margin: 0 10px; /* Adjust spacing between dots and text */
            display: inline-block;
        }

        /* Animation CSS */
        .animate {
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }

        .animate.visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="help-section animate">
        <h1>WE ARE HERE</h1>
        <h1>TO HELP YOU!</h1>
        <p>At GMA Product Series, we value our customers and are here to help with any questions or support you may need. Whether you’re looking for product information, need assistance with an order, or have any other inquiries, our dedicated customer support team is ready to assist you.</p>
    </div>

    <div class="contact-section animate">
        <div class="contact-method">
            <h2>OFFICE</h2>
            <ul>
                <li>Jln. Kebon Jeruk IX no .26, RT 007 RW 006, Kelurahan Maphar, Jakarta Barat, 11160</li>
            </ul>
        </div>
        <div class="contact-method">
            <h2>BY EMAIL</h2>
            <ul>
                <li>admin@gmaproductseries.com</li>
            </ul>
        </div>
        <div class="contact-method">
            <h2>BY PHONE</h2>
            <ul>
                <li>+62 000 0000 0000</li>
        </div>
        <div class="contact-method">
            <h2>SOCIALS</h2>
            <ul>
                <li><a href="#">Instagram</a></li>
                <li><a href="#">Youtube</a></li>
                <li><a href="#">Whatsapp</a></li>
                <li><a href="#">Tokopedia</a></li>
                <li><a href="#">Shopee</a></li>
                <li><a href="#">Lazada</a></li>
                <li><a href="#">Blibli</a></li>
                <li><a href="#">Tiktok</a></li>
            </ul>
        </div>
    </div>

    <!-- Moving Animation Section -->
    <div class="moving-word-container animate">
        <div class="moving-word">
            <div class="moving-word-item">ELEVATE YOUR PAGE</div>
            <div class="dot"></div>
            <div class="moving-word-item">EVERY DETAIL MATTERS</div>
            <div class="dot"></div>
            <div class="moving-word-item">STANDOUT FROM THE BEST</div>
            <div class="dot"></div>
            <div class="moving-word-item">ONLY THE ACCESSORIES</div>
            <div class="dot"></div>
            <div class="moving-word-item">RIDE WITH PRIDE</div>
            <div class="dot"></div>
            <!-- Duplicate content for seamless loop -->
            <div class="moving-word-item">ELEVATE YOUR PAGE</div>
            <div class="dot"></div>
            <div class="moving-word-item">EVERY DETAIL MATTERS</div>
            <div class="dot"></div>
            <div class="moving-word-item">STANDOUT FROM THE BEST</div>
            <div class="dot"></div>
            <div class="moving-word-item">ONLY THE ACCESSORIES</div>
            <div class="dot"></div>
            <div class="moving-word-item">RIDE WITH PRIDE</div>
        </div>
    </div>

    <?php include 'footer.php'; ?>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const elements = document.querySelectorAll('.animate');
        
        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });

        elements.forEach(element => {
            observer.observe(element);
        });
    });
    </script>
</body>
</html>
