<!-- Projects Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <!-- Heading -->
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col text-center mb-4">
                <h6 class="text-primary font-weight-normal text-uppercase mb-3">Our Projects</h6>
                <h1 class="mb-4 text-primary">Some Of Our Awesome Interior Designing Projects</h1>
            </div>
        </div>

        <!-- Filters -->
        <div class="row">
            <div class="col-12 text-center mb-2">
                <ul class="list-inline mb-4" id="portfolio-flters">
                    <li class="btn btn-outline-primary m-1 active" data-filter="*">All</li>
                    <li class="btn btn-outline-primary m-1" data-filter=".first">Complete</li>
                    <li class="btn btn-outline-primary m-1" data-filter=".second">Running</li>
                    <li class="btn btn-outline-primary m-1" data-filter=".third">Upcoming</li>
                </ul>
            </div>
        </div>

        <!-- Portfolio Items -->
        <div class="row mx-1 portfolio-container">
            <!-- Project 1 -->
            <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item first">
                <div class="position-relative overflow-hidden">
                    <div class="portfolio-img d-flex align-items-center justify-content-center">
                        <img class="img-fluid" src="img/portfolio-1.jpg" alt="Modern Living Room Design">
                    </div>
                    <div class="portfolio-text bg-secondary d-flex flex-column align-items-center justify-content-center">
                        <h4 class="text-white mb-4">Modern Living Room</h4>
                        <div class="d-flex align-items-center justify-content-center">
                            <a class="btn btn-outline-primary m-1" href="project-details.html">
                                <i class="fa fa-link"></i>
                            </a>
                            <a class="btn btn-outline-primary m-1" href="img/portfolio-1.jpg" data-lightbox="portfolio">
                                <i class="fa fa-eye"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project 2 -->
            <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item second">
                <div class="position-relative overflow-hidden">
                    <div class="portfolio-img d-flex align-items-center justify-content-center">
                        <img class="img-fluid" src="img/portfolio-2.jpg" alt="Luxury Kitchen Design">
                    </div>
                    <div class="portfolio-text bg-secondary d-flex flex-column align-items-center justify-content-center">
                        <h4 class="text-white mb-4">Luxury Kitchen</h4>
                        <div class="d-flex align-items-center justify-content-center">
                            <a class="btn btn-outline-primary m-1" href="project-details.html">
                                <i class="fa fa-link"></i>
                            </a>
                            <a class="btn btn-outline-primary m-1" href="img/portfolio-2.jpg" data-lightbox="portfolio">
                                <i class="fa fa-eye"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project 3 -->
            <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item third">
                <div class="position-relative overflow-hidden">
                    <div class="portfolio-img d-flex align-items-center justify-content-center">
                        <img class="img-fluid" src="img/portfolio-3.jpg" alt="Office Renovation">
                    </div>
                    <div class="portfolio-text bg-secondary d-flex flex-column align-items-center justify-content-center">
                        <h4 class="text-white mb-4">Office Renovation</h4>
                        <div class="d-flex align-items-center justify-content-center">
                            <a class="btn btn-outline-primary m-1" href="project-details.html">
                                <i class="fa fa-link"></i>
                            </a>
                            <a class="btn btn-outline-primary m-1" href="img/portfolio-3.jpg" data-lightbox="portfolio">
                                <i class="fa fa-eye"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Repeat more projects as needed -->
        </div>
    </div>
</div>
<!-- Projects End -->

<!-- Force Primary Color via JS -->
<script>
document.addEventListener("DOMContentLoaded", function() {
    const primaryColor = "#c9ae8c";
    const style = document.createElement("style");
    style.innerHTML = `
        .btn-outline-primary {
            color: ${primaryColor} !important;
            border-color: ${primaryColor} !important;
        }
        .btn-outline-primary:hover {
            background-color: ${primaryColor} !important;
            color: #fff !important;
        }
        .text-primary { color: ${primaryColor} !important; }
        .btn-primary {
            background-color: ${primaryColor} !important;
            border-color: ${primaryColor} !important;
        }
        .btn-primary:hover {
            background-color: #b89c7f !important;
            border-color: #b89c7f !important;
        }
    `;
    document.head.appendChild(style);
});
</script>
