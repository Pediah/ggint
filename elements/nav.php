<!-- Topbar Start -->
<div class="container-fluid bg-primary py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <a class="text-white pr-3" href="">FAQs</a>
                    <span class="text-white">|</span>
                    <a class="text-white px-3" href="">Help</a>
                    <span class="text-white">|</span>
                    <a class="text-white pl-3" href="">Support</a>
                </div>
            </div>
            <div class="col-md-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-white px-3" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="text-white px-3" href=""><i class="fab fa-twitter"></i></a>
                    <a class="text-white px-3" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="text-white px-3" href=""><i class="fab fa-instagram"></i></a>
                    <a class="text-white pl-3" href=""><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->

<?php
// ============================
// Dynamic Navbar PHP
// ============================

// If nav.php is in /includes/, scan parent folder
$dir = dirname(__DIR__) . '/';

// Files to ignore
$ignore = ['nav.php','footer.php','head-small.php','index-head.php','thankyou.php'];

// Get all .php files in this directory
$files = glob($dir.'*.php');
$current = basename($_SERVER['PHP_SELF']);
?>

<!-- Navbar Start -->
<div class="container-fluid position-relative nav-bar p-0">
    <div class="container position-relative" style="z-index: 9;">
        <nav class="navbar navbar-expand-lg bg-secondary navbar-dark py-3 py-lg-0 pl-3 pl-lg-5">    
            <a href="index.php" class="navbar-brand">
                <img src="img/logo.png" alt="Logo" style="max-width: 80px; max-height: 80px;">
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                <div class="navbar-nav ml-auto py-0">
                    <?php foreach ($files as $file): 
                        $filename = basename($file);
                        if (in_array($filename, $ignore)) continue;

                        // Label: index.php = Home, others = prettified filename
                        $label = ($filename === 'index.php') 
                                 ? 'Home' 
                                 : ucfirst(str_replace('-', ' ', pathinfo($filename, PATHINFO_FILENAME)));

                        $active = ($current === $filename) ? 'active' : '';
                    ?>
                        <a href="<?php echo $filename; ?>" class="nav-item nav-link <?php echo $active; ?>">
                            <?php echo $label; ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->

