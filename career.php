<?php
session_start();
include 'koneksi.php';
include 'header.php';

// Fetch the data from careerdesign table
$ambil = $koneksi->query("SELECT * FROM careerdesign WHERE idcareerdesign='1'"); // Assuming you want to fetch the first record
$data = $ambil->fetch_assoc();
?>

<!-- Include Font Awesome CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<style>
@font-face {
    font-family: 'GeneralSans-Semibold';
    src: url('fonts/GeneralSans-Semibold.otf') format('opentype');
}

@font-face {
    font-family: 'HighriseDemoBold';
    src: url('fonts/HighriseDemoBold700.otf') format('opentype');
}

body {
    background-color: #10100E;
    color: #FFFEE3;
    margin: 0;
    font-family: 'GeneralSans-Semibold', sans-serif;
}

.container-wrapper {
    max-width: 1440px;
    margin: 0 auto;
    padding: 20px;
}

.upcoming-events-container {
    background-color: #10100E;
    color: #FFFEE3;
    padding: 20px;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.upcoming-events-content {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
    text-align: left;
}

.event-info-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 100%;
    text-align: center;
}

.event-info-container img {
    width: 100%;
    height: auto;
}

.event-info {
    max-width: 50%;
    padding: 0;
    margin: 0;
}

.event-title {
    max-width: 50%;
    padding: 0;
    margin: 0;
}

.event-title h1 {
    font-family: 'HighriseDemoBold', sans-serif;
    color: #FFFEE5;
    font-size: 60px;
}

.event-info p {
    font-size: 16px;
    color: gray;
}

.event-info .date-location {
    font-size: 20px;
    font-weight: bold;
    display: flex;
    justify-content: space-between;
    align-items: center;
    color: #FFFEE5;
}

.event-info .date-location p {
    margin: 0 10px;
    color: #FFFEE5;
}

.event-info .date-location .date i, .event-info .date-location .location i {
    margin-right: 5px;
    color: #FFFEE5;
}

.reasons-container, .job-opportunity-container {
    background-color: #10100E;
    color: #FFFEE3;
    padding: 20px;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: flex-start;
    width: 100%;
}

.reasons-content, .job-list {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    gap: 20px;
    width: 60%;
}

.reasons-title-container, .job-opportunity-title-container {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    width: 40%;
}

.reasons-title {
    font-family: 'HighriseDemoBold', sans-serif;
    color: #FFFEE5;
    font-size: 50px;
    margin-bottom: 20px;
}

.reasons-subtitle {
    font-size: 16px;
    color: gray;
    margin-bottom: 20px;
}

.reason-box {
    background-color: transparent;
    color: #F2EEE3;
    padding: 20px;
    margin-bottom: 20px;
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    border: 2px solid #FFFEE3;
}

.reason-box .number {
    font-family: 'HighriseDemoBold', sans-serif;
    font-size: 50px;
    color: #F2EEE3;
    margin-bottom: 10px;
}

.reason-box .title {
    font-family: 'HighriseDemoBold', sans-serif;
    font-size: 50px;
    color: #F2EEE3;
    margin-bottom: 10px;
}

.reason-box .text {
    font-family: 'GeneralSans-Semibold', sans-serif;
    font-size: 16px;
    color: #F2EEE3;
    text-align: left;
}

/* Specific style for the first reason box */
.reason-box:first-of-type {
    background-color: #FFD700;
    color: #10100E;
    border: none;
}

.button-container {
    margin-top: 20px;
    margin-bottom: 20px;
}

.button-container a {
    font-family: 'GeneralSans-Semibold', sans-serif;
    font-size: 16px;
    color: #FFFEE3;
    background-color: #10100E;
    padding: 10px 20px;
    text-decoration: none;
    border: 1px solid #FFFEE3;
    border-radius: 5px;
}

.button-container a:hover {
    background-color: #FFFEE3;
    color: #10100E;
}

@media (max-width: 768px) {
    .upcoming-events-content {
        flex-direction: column;
        align-items: flex-start;
    }

    .event-info-container {
        flex-direction: column;
        align-items: center;
    }

    .event-info {
        max-width: 100%;
    }

    .event-title {
        max-width: 100%;
        text-align: left;
    }

    .event-info .date-location {
        font-size: 16px;
        flex-direction: column;
        align-items: flex-start;
    }

    .event-info .date-location p {
        margin: 5px 0;
    }

    .reasons-container, .job-opportunity-container {
        flex-direction: column;
        align-items: flex-start;
    }

    .reasons-title-container, .job-opportunity-title-container {
        width: 100%;
    }

    .reasons-title {
        font-size: 40px;
    }

    .reason-box .number {
        font-size: 40px;
        margin-bottom: 10px;
    }

    .reason-box .title {
        font-size: 20px;
    }

    .reason-box .text {
        font-size: 16px;
    }

    .job-opportunity-title-container h1 {
        font-size: 32px;
    }

    .job-opportunity-title-container p {
        font-size: 16px;
    }

    .job-item h2 {
        font-size: 20px;
    }

    .apply-button {
        font-size: 14px;
        padding: 8px 16px;
    }

    .reasons-content, .job-list {
        width: 100%;
    }
}

.job-opportunity-title-container h1 {
    font-family: 'HighriseDemoBold', sans-serif;
    font-size: 40px;
    margin-bottom: 10px;
}

.job-opportunity-title-container p {
    font-family: 'GeneralSans-Semibold', sans-serif;
    font-size: 18px;
    margin-bottom: 40px;
}

.job-item {
    border-bottom: 1px solid #FFFEE3;
    padding: 20px 0;
    width: 100%;
    text-align: left;
}

.job-item h2 {
    font-family: 'GeneralSans-Semibold', sans-serif;
    font-size: 24px;
    margin-bottom: 10px;
}

.job-item p {
    font-family: 'GeneralSans-Semibold', sans-serif;
    font-size: 16px;
    margin-bottom: 10px;
    color: gray;
}

.apply-button {
    font-family: 'GeneralSans-Semibold', sans-serif;
    font-size: 16px;
    color: #FFFEE3;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    border: 1px solid #FFFEE3;
    padding: 10px 20px;
    border-radius: 5px;
    transition: background-color 0.3s, color 0.3s;
}

.apply-button i {
    margin-left: 5px;
}

.apply-button:hover {
    background-color: #FFFEE3;
    color: #10100E;
}

.join-team-container {
    background-color: #FFD700;
    color: #10100E;
    padding: 50px;
    text-align: left;
    margin-top: 40px;
    width: 100%;
}

.join-team-container h1 {
    font-family: 'HighriseDemoBold', sans-serif;
    font-size: 50px;
    margin-bottom: 20px;
}

.join-team-container p {
    font-family: 'GeneralSans-Semibold', sans-serif;
    font-size: 20px;
    margin-bottom: 40px;
}

.join-team-container .reach-out-button {
    font-family: 'GeneralSans-Semibold', sans-serif;
    font-size: 13px;
    color: #10100E;
    background-color: transparent;
    padding: 10px 30px;
    text-decoration: none;
    border: 2px solid #10100E;
    border-radius: 5px;
    transition: background-color 0.3s, color 0.3s;
}

.join-team-container .reach-out-button:hover {
    background-color: #10100E;
    color: #FFFEE3;
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

<div class="container-wrapper">
    <div class="upcoming-events-container">
        <div class="upcoming-events-content animate">
            <div class="event-title">
                <h1><?php echo $data['judul1cd']; ?></h1>
            </div>
            <div class="event-info">
                <p><?php echo $data['desc1cd']; ?></p>
            </div>
        </div>
        <div class="event-info-container animate">
            <img src="foto_careerdesign/<?php echo $data['gambarcd']; ?>" alt="Career Image">
        </div>
    </div>

    <div class="reasons-container animate">
        <div class="reasons-title-container">
            <div class="reasons-title"><?php echo $data['judul2cd']; ?></div>
            <div class="reasons-subtitle">
                <?php echo $data['desc2cd']; ?>
            </div>
            <div class="button-container">
                <a href="#">Send your CV now!</a>
            </div>
        </div>
        <div class="reasons-content">
            <?php
            $ambil = $koneksi->query("SELECT * FROM careerbox");
            $count = 1;
            while ($careerbox = $ambil->fetch_assoc()) {
                $backgroundColor = ($count == 1) ? '#FFD700' : 'transparent';
                $textColor = ($count == 1) ? '#10100E' : '#F2EEE3';
                echo '<div class="reason-box animate" style="background-color: ' . $backgroundColor . ';">';
                echo '<div class="title" style="color: ' . $textColor . ';">' . str_pad($count, 2, '0', STR_PAD_LEFT) . '</div>';
                echo '<div class="number" style="color: ' . $textColor . ';">' . $careerbox['judulcareerbox'] . '</div>';
                echo '<div class="text" style="color: ' . $textColor . ';">' . $careerbox['textcareerbox'] . '</div>';
                echo '</div>';
                $count++;
            }
            ?>
        </div>
    </div>

    <div class="job-opportunity-container animate">
        <div class="job-opportunity-title-container">
            <h1><?php echo $data['judul3cd']; ?></h1>
            <p><?php echo $data['desc3cd']; ?></p>
        </div>
        <div class="job-list">
            <?php
            $jobList = $koneksi->query("SELECT * FROM joblist");
            while ($job = $jobList->fetch_assoc()) {
                echo '<div class="job-item animate">';
                echo '<h2>' . $job['jobtitle'] . '</h2>';
                echo '<p>' . $job['jobdesc'] . '</p>';
                echo '<a href="' . $job['joblink'] . '" class="apply-button">Apply <i class="fas fa-arrow-right"></i></a>';
                echo '</div>';
            }
            ?>
        </div>
    </div>
</div>

<div class="join-team-container animate">
    <h1><?php echo $data['judul4cd']; ?></h1>
    <a href="#" class="reach-out-button">REACH OUT</a>
</div>

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

<?php
include 'footer.php';
?>
