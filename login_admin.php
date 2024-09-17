<?php
session_start();
include 'koneksi.php';
?>
<?php include 'header.php'; ?>
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="container">
            <div class="banner_content d-md-flex justify-content-between align-items-center">
                <div class="mb-3 mb-md-0">
                    <h2 class="text-white">Login Administrator</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<br><br>
<section id="home-section" class="ftco-section">
    <div class="container mt-4">
        <div class="row justify-content-center">

            <div class="col-md-5">
                <div class="card">
                    <div class="card-body">
                        <h3 class="text-center mb-4">Login</h3>
                        <form method="post" class="form-contact contact_form">
                            <div class="form-group">
                                <label class="text-dark">Email</label>
                                <input type="email" name="email" class="form-control w-100" required>
                            </div>
                            <div class="form-group">
                                <label class="text-dark">Password</label>
                                <input type="password" class="form-control w-100" name="password" required>
                            </div>
                            <br>
                            <button class="btn btn-info btn-block" name="simpan">Masuk</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<br><br>
<?php
if (isset($_POST["simpan"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $ambil = $koneksi->query("SELECT * FROM admin WHERE email='$email' AND password='$password' LIMIT 1");
    $akunyangcocok = $ambil->num_rows;
    if ($akunyangcocok == 1) {
        $akun = $ambil->fetch_assoc();
        $_SESSION["admin"] = $akun;
        echo "<script>location ='admin/index.php';</script>";
    } else {
        echo "<script>alert('Email atau password anda salah');</script>";
        echo "<script>location ='login_admin.php';</script>";
    }
}
?>
<?php include 'footer.php'; ?>
