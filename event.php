<?php
session_start();
include 'koneksi.php';

// Fetch all events
$events = $koneksi->query("SELECT * FROM event ORDER BY idevent DESC");

$upcoming_events = [];
$past_events = [];

$current_date = date('Y-m-d');

// Categorize events
while ($event = $events->fetch_assoc()) {
    if ($event['tanggalevent'] >= $current_date) {
        $upcoming_events[] = $event;
    } else {
        $past_events[] = $event;
    }
}

include 'header.php';
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
    position: relative;
    background-color: #10100E;
    color: #FFFEE3;
    text-align: center;
    padding: 20px;
    opacity: 0;
    transform: translateY(40px);
    transition: opacity 0.6s ease-out, transform 0.6s ease-out;
}

.upcoming-events-container.visible {
    opacity: 1;
    transform: translateY(0);
}

.upcoming-events-container img {
    width: 100%;
    height: auto;
    aspect-ratio: 2 / 1;
    object-fit: cover;
}

.event-info {
    padding: 20px;
    max-width: 800px;
    margin: 0 auto;
}

.event-info h3 {
    font-family: 'HighriseDemoBold', sans-serif;
    color: #FFFEE5;
    font-size: 100px;
    text-transform: uppercase;
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

.upcoming-events-container h1, .past-events-title {
    font-family: 'HighriseDemoBold', sans-serif;
    color: #FFFEE5;
    font-size: 60px;
    text-align: left;
}

.gray-line {
    background-color: gray;
    height: 2px;
    width: 100%;
    margin-top: 20px;
    margin-bottom: 20px;
}

.past-events-section {
    background-color: #10100E;
    padding: 20px;
    position: relative;
    opacity: 0;
    transform: translateY(40px);
    transition: opacity 0.6s ease-out, transform 0.6s ease-out;
}

.past-events-section.visible {
    opacity: 1;
    transform: translateY(0);
}

.past-events-container {
    display: flex;
    justify-content: space-between;
    gap: 20px;
}

.past-events-container .event {
    width: 32%;
    color: #FFFEE3;
    padding: 10px;
    background-color: #10100E;
}

.past-events-container .event img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    border-radius: 10px;
}

.past-events-container .event h3 {
    font-family: 'GeneralSans-Semibold', sans-serif;
    color: #FFFEE5;
    font-size: 20px !important;
    margin-top: 10px;
    text-transform: none;
}

.past-events-container .event p {
    font-size: 12px;
    color: gray;
}

.past-events-container .event .date-location {
    font-size: 12px;
    font-weight: bold;
    display: flex;
    justify-content: space-between;
    align-items: center;
    color: #FFFEE5;
}

.past-events-container .event .date-location p {
    margin: 0 10px;
    color: #FFFEE5;
}

.past-events-container .event .date-location .date i, .past-events-container .event .date-location .location i {
    margin-right: 5px;
    color: #FFFEE5;
}

.nav-btn {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background-color: rgba(0, 0, 0, 0.5);
    color: white;
    border: none;
    padding: 10px;
    cursor: pointer;
    font-size: 20px;
}

.nav-btn.left {
    left: 0;
}

.nav-btn.right {
    right: 0;
}

@media (max-width: 768px) {
    .upcoming-events-container, .past-events-container {
        flex-direction: column;
        align-items: center;
    }

    .past-events-container .event {
        width: 100%;
    }

    .event-info h3 {
        font-size: 40px;
    }

    .upcoming-events-container h1, .past-events-title {
        font-size: 40px;
    }

    .event-info .date-location {
        font-size: 16px;
        flex-direction: column;
        align-items: flex-start;
    }

    .event-info .date-location p {
        margin: 5px 0;
    }

    .nav-btn {
        font-size: 16px;
        padding: 8px;
    }
}
</style>

<div class="container-wrapper">
    <div class="upcoming-events-container">
        <h1>UPCOMING EVENTS</h1>
        <button class="nav-btn left" onclick="navigateUpcoming(-1)">&#10094;</button>
        <button class="nav-btn right" onclick="navigateUpcoming(1)">&#10095;</button>
        <?php if (!empty($upcoming_events)) { 
            foreach ($upcoming_events as $key => $event) { ?>
            <div class="event-slide" id="upcoming-event-<?php echo $key; ?>" style="display: <?php echo $key == 0 ? 'block' : 'none'; ?>;">
                <img src="foto_event/<?php echo htmlspecialchars($event["fotoevent"]); ?>" alt="Event Image">
                <div class="event-info">
                    <h3><?php echo htmlspecialchars($event["namaevent"]); ?></h3>
                    <p><?php echo htmlspecialchars($event["deskripsievent"]); ?></p>
                    <div class="date-location">
                        <p class="date"><i class="fas fa-calendar-alt"></i><?php echo htmlspecialchars($event["tanggalevent"]); ?></p>
                        <p class="location"><i class="fas fa-map-marker-alt"></i><?php echo htmlspecialchars($event["lokasievent"]); ?></p>
                    </div>
                </div>
            </div>
            <?php } 
        } else { ?>
            <p>No upcoming events.</p>
        <?php } ?>
        <div class="gray-line"></div>
    </div>

    <div class="past-events-section">
        <h1 class="past-events-title">PAST EVENTS</h1>
        <button class="nav-btn left" onclick="navigatePast(-1)">&#10094;</button>
        <button class="nav-btn right" onclick="navigatePast(1)">&#10095;</button>
        <div class="past-events-container">
            <?php foreach ($past_events as $key => $past_event) { ?>
                <div class="event past-event-slide" id="past-event-<?php echo $key; ?>" style="display: <?php echo $key < 3 ? 'block' : 'none'; ?>;">
                    <img src="foto_event/<?php echo htmlspecialchars($past_event["fotoevent"]); ?>" alt="Event Image">
                    <h3><?php echo htmlspecialchars($past_event["namaevent"]); ?></h3>
                    <p><?php echo htmlspecialchars($past_event["deskripsievent"]); ?></p>
                    <div class="date-location">
                        <p class="date"><i class="fas fa-calendar-alt"></i><?php echo htmlspecialchars($past_event["tanggalevent"]); ?></p>
                        <p class="location"><i class="fas fa-map-marker-alt"></i><?php echo htmlspecialchars($past_event["lokasievent"]); ?></p>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>

<script>
let currentUpcomingSlide = 0;
const upcomingSlides = document.querySelectorAll('.event-slide');

function navigateUpcoming(direction) {
    upcomingSlides[currentUpcomingSlide].style.display = 'none';
    currentUpcomingSlide = (currentUpcomingSlide + direction + upcomingSlides.length) % upcomingSlides.length;
    upcomingSlides[currentUpcomingSlide].style.display = 'block';
}

let currentPastSlide = 0;
const pastSlides = document.querySelectorAll('.past-event-slide');
let pastEventDisplayCount = window.innerWidth <= 768 ? 1 : 3;

function updatePastEventDisplayCount() {
    pastEventDisplayCount = window.innerWidth <= 768 ? 1 : 3;
    navigatePast(0);
}

function navigatePast(direction) {
    for (let i = 0; i < pastSlides.length; i++) {
        pastSlides[i].style.display = 'none';
    }
    currentPastSlide = (currentPastSlide + direction + pastSlides.length) % pastSlides.length;
    for (let i = 0; i < pastEventDisplayCount; i++) {
        const index = (currentPastSlide + i) % pastSlides.length;
        pastSlides[index].style.display = 'block';
    }
}

document.addEventListener('DOMContentLoaded', function() {
    const sections = document.querySelectorAll('.upcoming-events-container, .past-events-section');
    
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1 });

    sections.forEach(section => {
        observer.observe(section);
    });

    updatePastEventDisplayCount();
    navigatePast(0);
});

window.addEventListener('resize', updatePastEventDisplayCount);
</script>

<?php
include 'footer.php';
?>
