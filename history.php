<?php
include 'header_landing.php';
include 'koneksi.php';

// Fetch data from the historydesign table
$sql = "SELECT * FROM historydesign LIMIT 1";
$result = $koneksi->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $bghistory = $row['bghistory'];
    $titlehistory1 = $row['titlehistory1'];
    $imagehistory1 = $row['imagehistory1'];
    $titlehistory2 = $row['titlehistory2'];
    $deschistory2 = $row['deschistory2'];
    $yearhistory2 = $row['yearhistory2'];
    $titlehistory3 = $row['titlehistory3'];
    $deschistory3 = $row['deschistory3'];
    $yearhistory3 = $row['yearhistory3'];
    $buttonhistory3 = $row['buttonhistory3'];
    $imagehistory4 = $row['imagehistory4'];
    $titlehistory4 = $row['titlehistory4'];
    $deschistory4 = $row['deschistory4'];
    $yearhistory4 = $row['yearhistory4'];
    $titlehistory5 = $row['titlehistory5'];
    $deschistory5 = $row['deschistory5'];
    $buttonhistory5 = $row['buttonhistory5'];
    $yearhistory5 = $row['yearhistory5'];
    $imagehistory6 = $row['imagehistory6'];
    $titlehistory6 = $row['titlehistory6'];
    $deschistory6 = $row['deschistory6'];
} else {
    echo "No data found.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet"/>
    <link href="https://fonts.cdnfonts.com/css/general-sans" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title><?php echo $titlehistory1; ?></title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            list-style: none;
            text-decoration: none;
            scroll-behavior: smooth;
        }

        :root {
            --gma-yellow: #F7E835;
            --neutral: #F2EEE3;
            --light-yellow: #FFFEE5;
            --background: #10100E;
            --p-font: 12px;
        }

        @font-face {
            font-family: 'HighriseDemoBold';
            src: url('fonts/HighriseDemoBold700.otf') format('opentype');
        }

        @font-face {
            font-family: 'GeneralSans';
            src: url('fonts/GeneralSans-Regular.otf') format('opentype');
        }

        .logo {
            height: 50px;
        }

        body {
            font-family: 'HighriseDemoBold', sans-serif;
            display: flex;
            flex-direction: column;
            background-size: cover;
            color: #FFFFFF;
        }

        .first-section {
            position: relative;
            height: 800px;
            background: url('foto_history/<?php echo $bghistory; ?>') no-repeat center center;
            background-size: cover;
            padding: 85px 0;
        }

        .video-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: 1;
        }

        .first-section-content {
            position: relative;
            z-index: 2;
            color: #FFFFFF;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            height: 100%;
        }

        .hero h1 {
            font-family: 'HighriseDemoBold', sans-serif;
            font-size: 10rem; /* Increased font size */
            margin-bottom: 20px;
            line-height: 0.9;
        }

        .hero p {
            font-family: 'GeneralSans', sans-serif;
            font-size: 1rem;
            max-width: 500px;
            margin: 0 auto;
            display: none;
        }

        .hero img {
            margin-top: 20px;
            max-width: 100%;
            height: auto;
        }

        @media (max-width: 1200px) {
            .hero h1 {
                font-size: 10rem; /* Adjusted for smaller screens */
            }

            .hero p {
                font-size: 0.9rem;
            }
        }

        @media (max-width: 768px) {
            .hero h1 {
                font-size: 8rem; /* Adjusted for smaller screens */
            }

            .hero p {
                font-size: 0.8rem;
            }
        }

        @media (max-width: 480px) {
            .hero h1 {
                font-size: 6rem; /* Adjusted for smaller screens */
            }

            .hero p {
                font-size: 0.7rem;
            }
        }

        .foto_section {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: var(--background);
            padding: 85px 0;
        }

        .foto_section img {
            max-width: 95%;
            height: auto;
            object-fit: cover;
            border-radius: 10px;
        }

        .about-section,
        .early-days-section,
        .global-reach-section,
        .growth-innovation-section,
        .looking-ahead-section {
            position: relative;
            background-color: var(--background);
            color: var(--neutral);
            padding: 85px 20px;
            text-align: left;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .about-section .background-year,
        .early-days-section .background-year,
        .global-reach-section .background-year,
        .growth-innovation-section .background-year {
            position: absolute;
            top: 50%;
            font-size: 15rem;
            font-family: 'HighriseDemoBold', sans-serif;
            color: rgba(255, 255, 255, 0.1);
            transform: translateY(-50%);
            z-index: 1;
        }

        .about-section .background-year {
            right: 20px;
        }

        .early-days-section .background-year,
        .global-reach-section .background-year {
            left: 20px;
        }

        .growth-innovation-section .background-year {
            right: 20px;
            z-index: 3; /* Ensure it is above other elements */
        }

        .about-section .content,
        .early-days-section .content,
        .global-reach-section .content,
        .growth-innovation-section .content {
            position: relative;
            z-index: 2;
        }

        .about-section h2 {
            font-family: 'HighriseDemoBold', sans-serif;
            font-size: 7rem;
            margin-bottom: 20px;
        }

        .about-section p {
            font-family: 'GeneralSans', sans-serif;
            font-size: 1.5rem;
            line-height: 1.6;
        }

        .early-days-section h2,
        .global-reach-section h2,
        .growth-innovation-section h2 {
            font-family: 'HighriseDemoBold', sans-serif;
            font-size: 5rem;
            margin-bottom: 20px;
        }

        .early-days-section p,
        .global-reach-section p,
        .growth-innovation-section p,
        .looking-ahead-section p {
            font-family: 'GeneralSans', sans-serif;
            font-size: 1.3rem;
            line-height: 1.6;
        }

        .early-days-content,
        .global-reach-content,
        .growth-innovation-content {
            display: flex;
            flex-direction: row;
            align-items: flex-start;
        }

        .early-days-title,
        .global-reach-title,
        .growth-innovation-image {
            flex: 1;
        }

        .early-days-description,
        .global-reach-description,
        .growth-innovation-description {
            flex: 2;
            padding-left: 20px;
        }

        .early-days-section .btn,
        .global-reach-section .btn {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            font-family: 'GeneralSans', sans-serif;
            font-size: 1rem;
            color: var(--neutral);
            border: 1px solid var(--neutral);
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
        }

        .early-days-section .btn:hover,
        .global-reach-section .btn:hover {
            background-color: var(--neutral);
            color: var(--background);
        }

        @media (max-width: 768px) {
            .about-section .background-year,
            .early-days-section .background-year,
            .global-reach-section .background-year,
            .growth-innovation-section .background-year {
                font-size: 10rem;
            }

            .about-section h2 {
                font-size: 5rem;
            }

            .early-days-section h2,
            .global-reach-section h2,
            .growth-innovation-section h2 {
                font-size: 3rem;
            }

            .early-days-content,
            .global-reach-content,
            .growth-innovation-content {
                flex-direction: column;
            }

            .early-days-description,
            .global-reach-description,
            .growth-innovation-description {
                padding-left: 0;
                padding-top: 20px;
            }

            .growth-innovation-image img {
                width: 100%;
                height: auto;
                margin-bottom: 20px;
            }
        }

        @media (max-width: 480px) {
            .about-section .background-year,
            .early-days-section .background-year,
            .global-reach-section .background-year,
            .growth-innovation-section .background-year {
                font-size: 8rem;
            }

            .about-section h2 {
                font-size: 4rem;
            }

            .early-days-section h2,
            .global-reach-section h2,
            .growth-innovation-section h2 {
                font-size: 2rem;
            }
        }

        .looking-ahead-section {
            height: 800px;
            background: url('foto_history/<?php echo $imagehistory6; ?>') no-repeat center center;
            background-size: cover;
            text-align: center;
            display: flex;
            align-items: flex-end;
            justify-content: center;
            background-image: linear-gradient(to top, #10100E 0%, rgba(16, 16, 14, 0.5) 50%, rgba(16, 16, 14, 0.5) 50%, #10100E 100%), url('foto_history/<?php echo $imagehistory6; ?>');
            padding: 0;
            margin: 0;
        }

        .looking-ahead-section h1 {
            font-family: 'HighriseDemoBold', sans-serif;
            font-size: 12rem;
            color: #FFFFFF;
            margin-bottom: 20px;
        }

        .looking-ahead-content {
            position: relative;
            text-align: center;
            padding: 50px 20px;
        }

        .looking-ahead-content h1 {
            font-family: 'HighriseDemoBold', sans-serif;
            font-size: 5rem;
            margin-bottom: 20px;
        }

        .looking-ahead-content p {
            font-family: 'GeneralSans', sans-serif;
            font-size: 1.5rem;
            line-height: 1.6;
            color: var(--neutral);
        }

        @media (max-width: 1200px) {
            .looking-ahead-section h1 {
                font-size: 10rem;
            }
            .looking-ahead-content h1 {
                font-size: 4rem;
            }
        }

        @media (max-width: 768px) {
            .looking-ahead-section h1 {
                font-size: 8rem;
            }
            .looking-ahead-content h1 {
                font-size: 3rem;
            }
        }

        @media (max-width: 480px) {
            .looking-ahead-section h1 {
                font-size: 6rem;
            }
            .looking-ahead-content h1 {
                font-size: 2.5rem;
            }
        }

        .extra-space {
            margin-bottom: 150px;
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
</head>
<body>
    <section class="first-section">
        <div class="first-section-content">
            <div class="hero">
                <h1 class="animate"><?php echo $titlehistory1; ?></h1>
            </div>
        </div>
    </section>

    <section class="foto_section animate">
        <img src="foto_history/<?php echo $imagehistory1; ?>" alt="Image 1">
    </section>

    <section class="about-section animate">
        <div class="container">
            <div class="background-year"><?php echo $yearhistory2; ?></div>
            <div class="content">
                <h2><?php echo $titlehistory2; ?></h2>
                <p><?php echo $deschistory2; ?></p>
            </div>
        </div>
    </section>

    <section class="early-days-section animate">
        <div class="container">
            <div class="background-year"><?php echo $yearhistory3; ?></div>
            <div class="content">
                <div class="early-days-content">
                    <div class="early-days-title">
                        <h2><?php echo $titlehistory3; ?></h2>
                    </div>
                    <div class="early-days-description">
                        <p><?php echo $deschistory3; ?></p>
                        <a href="product.php" class="btn"><?php echo $buttonhistory3; ?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="growth-innovation-section animate">
        <div class="container">
            <div class="background-year" style="right: 0;"><?php echo $yearhistory4; ?></div>
            <div class="content">
                <div class="growth-innovation-content">
                    <div class="growth-innovation-image">
                        <img src="foto_history/<?php echo $imagehistory4; ?>" alt="Image 4">
                    </div>
                    <div class="growth-innovation-description">
                        <h2><?php echo $titlehistory4; ?></h2>
                        <p><?php echo $deschistory4; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="global-reach-section animate">
        <div class="container">
            <div class="background-year"><?php echo $yearhistory5; ?></div>
            <div class="content">
                <div class="global-reach-content">
                    <div class="global-reach-title">
                        <h2><?php echo $titlehistory5; ?></h2>
                    </div>
                    <div class="global-reach-description">
                        <p><?php echo $deschistory5; ?></p>
                        <a href="product.php" class="btn"><?php echo $buttonhistory5; ?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="looking-ahead-section animate">
        <h1><?php echo $titlehistory6; ?></h1>
    </section>

    <section class="looking-ahead-content extra-space animate">
        <div class="container">
            <p><?php echo $deschistory6; ?></p>
        </div>
    </section>
</body>
</html>

<?php
include 'footer.php';
?>
