<?php
session_start();
include 'koneksi.php';
include 'header.php';

// Fetch keyword and sort order from POST request
$keyword = isset($_POST['keyword']) ? $koneksi->real_escape_string($_POST['keyword']) : "";
$sort_order = isset($_POST['sort_order']) ? $_POST['sort_order'] : "ASC"; // Default sort order

// Fetch categories
$ambilkategori = $koneksi->query("SELECT * FROM kategori ORDER BY namakategori ASC");
$categories = $ambilkategori->fetch_all(MYSQLI_ASSOC);

?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<section class="dealer_area section_gap">
    <div class="container-fluid custom-container">
        <div class="dealer-header mb-5 animate">
            <h2 class="dealer-title">FIND YOUR NEAREST DEALER</h2>
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-end">
                <form method="post" id="search-form" class="d-flex mb-4 w-100">
                    <div class="input-group mr-3">
                        <input type="text" name="keyword" value="<?= htmlspecialchars($keyword) ?>" placeholder="Enter your location" class="form-control search-box">
                        <div class="input-group-append">
                            <button type="submit" name="cari" value="cari" class="btn btn-info search-button">
                                <i class="fas fa-search" style="color: #FFF;"></i>
                            </button>
                        </div>
                    </div>
                    <div class="input-group">
                        <select name="sort_order" id="sort_order" class="form-control" onchange="document.getElementById('search-form').submit();">
                            <option value="ASC" <?= $sort_order == "ASC" ? "selected" : "" ?>>A to Z</option>
                            <option value="DESC" <?= $sort_order == "DESC" ? "selected" : "" ?>>Z to A</option>
                        </select>
                    </div>
                </form>
            </div>
            <hr class="dealer-divider">
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="latest_dealer_inner">
                    <?php
                    // Fetch dealers
                    $query = "SELECT * FROM dealer WHERE lokasidealer LIKE ? ORDER BY namadealer $sort_order";
                    $stmt = $koneksi->prepare($query);
                    $likeKeyword = "%$keyword%";
                    $stmt->bind_param("s", $likeKeyword);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    ?>

                    <?php if ($result->num_rows > 0): ?>
                        <div class="row justify-content-center mb-5" style="padding-bottom:10px">
                            <?php while ($dealer = $result->fetch_assoc()): ?>
                                <div class="col-12 mb-4">
                                    <div class="single-dealer row align-items-center animate">
                                        <div class="col-md-3 dealer-img">
                                            <img src="foto_dealer/<?= htmlspecialchars($dealer['fotodealer']) ?>" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-md-4 dealer-info middle-info text-left">
                                            <h4><?= htmlspecialchars($dealer['namadealer']) ?></h4>
                                            <p class="text-grey deskripsidealer"><?= htmlspecialchars($dealer['deskripsidealer']) ?></p>
                                            <a href="https://www.google.com/maps?q=<?= urlencode($dealer['lokasidealer']) ?>" target="_blank" class="btn btn-location">See location</a>
                                        </div>
                                        <div class="col-md-5 dealer-info right-info text-left">
                                            <p><i class="fas fa-map-marker-alt text-grey"></i> <span class="text-grey"><?= htmlspecialchars($dealer['lokasidealer']) ?></span></p>
                                            <p><i class="fas fa-clock text-grey"></i> <span class="text-grey"><?= htmlspecialchars($dealer['haribukadealer']) ?>, <?= htmlspecialchars($dealer['jambukadealer']) ?></span></p>
                                            <p><i class="fas fa-phone-alt text-grey"></i> <span class="text-grey"><?= htmlspecialchars($dealer['nomordealer']) ?></span></p>
                                        </div>
                                    </div>
                                    <hr class="dealer-divider">
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php else: ?>
                        <p class="text-center mt-5 animate">No dealers found in this location.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include 'footer.php';
?>

<style>
/* [Style definitions as provided earlier] */
@font-face {
    font-family: 'GeneralSans';
    src: url('fonts/GeneralSans-Regular.otf') format('opentype');
}

@font-face {
    font-family: 'GeneralSans-Semibold';
    src: url('fonts/GeneralSans-Semibold.otf') format('opentype');
}

body, html {
    margin: 0;
    padding: 0;
    width: 100%;
    overflow-x: hidden;
}

.container-fluid.custom-container {
    padding: 0 60px;
    margin-top: -0px; /* Adjust the top margin value */
}

.dealer_area {
    background-color: #10100E;
    color: #F2EEE3;
}

@font-face {
    font-family: 'HighriseDemo';
    src: url('fonts/HighriseDemoBold700.otf') format('opentype');
}

.dealer-title {
    font-family: 'HighriseDemo';
    color: #FFFEE5;
    font-size: 60px; /* Smaller font size */
    font-stretch: normal;
    text-align: left;
    text-transform: uppercase;
    position: relative;
    align-self: flex-start; /* Align the title to the start of the flex container */
}

.dealer-header {
    position: relative; /* Position relative to contain absolutely positioned elements */
}

.single-dealer {
    background-color: transparent;
    border: 0px solid #ccc;
    padding: 20px;
    border-radius: 0px;
    overflow: hidden;
    margin-bottom: 20px; /* Add space between the dealer cards */
}

.dealer-img {
    text-align: center;
}

.dealer-img img {
    max-width: 100%;
    height: auto;
}

.middle-info {
    text-align: left;
    padding-left: 20px; /* Add space between image and middle column */
}

.right-info {
    text-align: left;
    padding-left: 20px; /* Add space between middle and right column */
}

.dealer-info h4 {
    color: #FFFEE5;
    font-weight: bold;
    font-family: 'GeneralSans-Semibold'; /* Apply GeneralSans-Semibold font */
}

.dealer-info p {
    color: #FFFEE5;
    font-family: 'GeneralSans'; /* Apply GeneralSans font */
}

.dealer-info p.deskripsidealer {
    color: #888888; /* Gray color for deskripsidealer */
}

.form-control {
    border-radius: 0;
    background-color: transparent;
    color: #FFFEE5;
}

.form-control::placeholder {
    color: #FFFEE5;
}

.input-group {
    position: relative;
}

.input-group-append {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    right: 10px;
}

.input-group-append .btn {
    border-radius: 0;
}

.btn.btn-info {
    background-color: transparent;
}

hr.dealer-divider {
    border-top: 1px solid #FFFEE5;
    margin-top: 20px;
}

.text-grey {
    color: #888888;
}

.fa-map-marker-alt,
.fa-clock,
.fa-phone-alt {
    margin-right: 8px; /* Add space between icon and text */
}

.search-box {
    border: 1px solid #888888; /* Adjust border style */
    padding-left: 15px; /* Adjust padding */
}

.search-button {
    background-color: transparent;
    border: none;
    padding: 0 15px;
}

.btn-location {
    display: inline-block;
    margin-top: 10px;
    padding: 5px 20px;
    background-color: transparent;
    border: 1px solid #888888;
    color: #888888;
    text-transform: capitalize; /* Capitalize only the first word */
    font-weight: bold;
    text-align: center;
    text-decoration: none;
    transition: background-color 0.3s, color 0.3s;
    font-size: 12px; /* Smaller font size */
}

.btn-location:hover {
    background-color: #888888;
    color: #10100E;
}

@media (max-width: 768px) {
    .dealer-header {
        flex-direction: column;
        align-items: flex-start;
    }

    .sort-dropdown {
        width: 100%;
        margin-top: 10px;
    }

    .sort-dropdown .form-control {
        width: 100%;
    }

    .single-dealer {
        flex-direction: column;
        align-items: flex-start;
    }

    .dealer-img,
    .middle-info,
    .right-info {
        width: 100%;
        text-align: left;
        padding-left: 0; /* Remove padding on small screens */
    }

    .dealer-img {
        margin-bottom: 10px;
    }

    .dealer-info h4,
    .dealer-info p {
        margin-bottom: 5px;
    }

    .btn-location {
        margin-bottom: 20px; /* Add space below button on smaller devices */
    }
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
document.getElementById('sort_order').addEventListener('change', function() {
    document.getElementById('search-form').submit();
});

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
