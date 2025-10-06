<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
<title>G & G Interiors — Free Consultations | Interior Design for All Budgets</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="G & G Interiors offers free consultations and stylish interior design that fits every budget. From room refreshes to full renovations—let’s create a space you’ll love." />
<meta name="keywords" content="G & G Interiors, interior design, free consultation, affordable interior design, home styling, office design, space planning, decor" />
<meta name="robots" content="index, follow" />
<link rel="canonical" href="https://YOUR-SITE-URL.com/" />

<!-- Open Graph / Facebook -->
<meta property="og:title" content="G & G Interiors — Free Consultations | Interior Design for All Budgets" />
<meta property="og:description" content="Stylish interiors for real-life budgets. Book your free consult today." />
<meta property="og:type" content="website" />
<meta property="og:url" content="https://YOUR-SITE-URL.com/" />
<meta property="og:image" content="https://YOUR-SITE-URL.com/path/to/hero-image.jpg" />
<meta property="og:site_name" content="G & G Interiors" />
<meta property="og:locale" content="en_ZA" />

<!-- Twitter -->
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="G & G Interiors — Free Consultations" />
<meta name="twitter:description" content="Interior design that meets your budget. Free consultations." />
<meta name="twitter:image" content="https://YOUR-SITE-URL.com/path/to/hero-image.jpg" />

<!-- Brand basics -->
<link rel="icon" href="/favicon.ico" />
<meta name="theme-color" content="#bfb3a8" />

<!-- Local Business (JSON-LD) -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "InteriorDesignService",
  "name": "G & G Interiors",
  "url": "https://YOUR-SITE-URL.com/",
  "image": "https://YOUR-SITE-URL.com/path/to/hero-image.jpg",
  "description": "Free consultations. Interior design for all budgets—homes and offices.",
  "areaServed": "South Africa",
  "telephone": "+27 YOUR-PHONE",
  "email": "info@YOUR-SITE-URL.com",
  "sameAs": [
    "https://www.facebook.com/YOUR-PAGE",
    "https://www.instagram.com/YOUR-HANDLE"
  ]
}
</script>


    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Oswald:wght@400;500;600&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
   <?php include 'elements/nav.php'; ?> 

<!-- Under Nav Start -->
<div class="container-fluid bg-white py-3">
    <div class="container">
        <div class="row">
            <!-- Office -->
            <div class="col-lg-4 text-left mb-3 mb-lg-0">
                <div class="d-inline-flex text-left">
                    <h1 class="flaticon-office font-weight-normal text-primary m-0 mr-3"></h1>
                    <div class="d-flex flex-column">
                        <h5 class="text-primary">Our Office</h5>
                        <p class="m-0">Johannesburg, South Africa</p>
                    </div>
                </div>
            </div>

            <!-- Email -->
            <div class="col-lg-4 text-left text-lg-center mb-3 mb-lg-0">
                <div class="d-inline-flex text-left">
                    <h1 class="flaticon-email font-weight-normal text-primary m-0 mr-3"></h1>
                    <div class="d-flex flex-column">
                        <h5 class="text-primary">Email Us</h5>
                        <p class="m-0">info@gginteriors.co.za</p>
                    </div>
                </div>
            </div>

            <!-- Phone -->
            <div class="col-lg-4 text-left text-lg-right mb-3 mb-lg-0">
                <div class="d-inline-flex text-left">
                    <h1 class="flaticon-telephone font-weight-normal text-primary m-0 mr-3"></h1>
                    <div class="d-flex flex-column">
                        <h5 class="text-primary">Call Us</h5>
                        <p class="m-0">+27 65 074 6156</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Under Nav End -->


 <?php include 'elements/head-main.php'; ?>


    <?php include 'elements/about.php'; ?>
    
    <?php include 'elements/services.php'; ?>
   
    <?php include 'elements/consult.php'; ?>
        <?php include 'elements/projects.php'; ?> 
   




  




    <?php include 'elements/footer.php'; ?> 


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script>
document.addEventListener("DOMContentLoaded", function() {
    const primaryColor = "#c9ae8c";

    // Force text-primary
    const style = document.createElement("style");
    style.innerHTML = `
        .text-primary {
            color: ${primaryColor} !important;
        }
        .bg-primary {
            background-color: ${primaryColor} !important;
        }
        .btn-primary {
            background-color: ${primaryColor} !important;
            border-color: ${primaryColor} !important;
        }
        .btn-primary:hover,
        .btn-primary:focus {
            background-color: #b89c7f !important; /* darker hover shade */
            border-color: #b89c7f !important;
        }
    `;
    document.head.appendChild(style);
});
</script>

</body>

</html>