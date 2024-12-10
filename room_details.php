<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Room Details</title>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
            <?php require'inc/links.php'; ?>
        </head>
        <!--Styles-->
        <body class="bg-light">
            <?php require 'header.php'?>
        <div class="container align-items-center">
                <div class="row">
                    <div class="col-lg-9 col-md-12 px-4">
 <div class="card mb-4 border-0 shadow">
                        <div class="row g-0 p-3 align-items-center">
                            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                            <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><img src="https://img.freepik.com/free-photo/colorful-chairs-surround-tables-bright-vibrant-classroom_157027-4056.jpg?ga=GA1.1.1856920665.1733313816&semt=ais_tags_boosted" class="w-100"></div>
                                <div class="swiper-slide"><img src="https://img.freepik.com/premium-photo/classroom_1251862-116.jpg?ga=GA1.1.1856920665.1733313816&semt=ais_tags_boosted" class="w-100"></div>
                                <div class="swiper-slide"><img src="https://img.freepik.com/free-photo/learning-modern-classroom-with-wooden-desks-blackboard-generated-by-artificial-intelligence_188544-149942.jpg?ga=GA1.1.1856920665.1733313816&semt=ais_tags_boosted" class="w-100 "></div>
                            </div>
                            </div>
                            </div>
                            </div>
                            <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <h5 class="mb-3">Room Name</h5>
                            <div class="features mb-3">
                            <h6>Features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-warp p-font">
                                Department: Computer Science
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-warp p-font">
                                Capacity: 40 
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-warp p-font">
                                Type: Lab
                            </span>
                            <h6>Equipments</h6>
                            <span class="badge rounded-pill bg-light text-dark text-warp p-font">
                                Computer
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-warp p-font">
                                Projector
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-warp p-font">
                                Whiteboard
                            </span>
                            </div>
                            <div class="rating mb-4">
                            <h6>Rating</h6>
                            <span class="badge rounded-pill bg-light">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            </span>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <a href="#" class="btn text-decoration-none btn-sm text-white c_btn shadow-none mb-2 w-100">Book Now</a>
                            </div>
                        </div>
                    </div>
        </div>
                    </div>
                </div>
                
            </div>
        </div>
            <!--Footer-->
            <?php require'inc/footer.php';?>
            <!--Scripts-->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
            <script>
            var swiper = new Swiper(".mySwiper", {
                spaceBetween: 30,
                effect: "fade",
                centeredSlides: true,
                autoplay: {
                    delay: 2500,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
            });
            </script>
        </body>
    </html>