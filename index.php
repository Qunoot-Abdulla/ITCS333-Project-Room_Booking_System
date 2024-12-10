<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>UOB Room Booking-Home</title>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
            <?php require'inc/links.php'; ?>
        </head>
        <!--Styles-->
        <style>
            @media screen and (max-width: 575px){
            .availiblity-form{
            margin-top: 25px;
            padding: 0 35px;}
            }
        </style>
        <body class="bg-light">
            <!--link with header.php-->
            <?php require'inc/header.php'?>
            <!--Carousel-->
            <div class="container-fluid px-lg-4 mt-4">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="https://img.freepik.com/free-photo/colorful-chairs-surround-tables-bright-vibrant-classroom_157027-4056.jpg?ga=GA1.1.1856920665.1733313816&semt=ais_tags_boosted" class="w-100 d-block"></div>
                <div class="swiper-slide"><img src="https://img.freepik.com/premium-photo/classroom_1251862-116.jpg?ga=GA1.1.1856920665.1733313816&semt=ais_tags_boosted" class="w-100 d-block"></div>
                <div class="swiper-slide"><img src="https://img.freepik.com/free-photo/learning-modern-classroom-with-wooden-desks-blackboard-generated-by-artificial-intelligence_188544-149942.jpg?ga=GA1.1.1856920665.1733313816&semt=ais_tags_boosted" class="w-100 d-block"></div>
            </div>
        </div>
            </div>
            <!--Room Availiblity-->
            <div class="container availiblity-form">
                <div class="row">
                    <div class="col-lg-12 bg-white shadow p-4 rounded">
                        <h5 class="mb-4">Check Booking Availability</h5>
                        <form>
                            <div class="row align-items-end">
                            <div class="col-lg-3" style="font-weight: 500;">
                                    <label class="form-label">Department</label>
                                    <select class="form-select shadow-none" >
                                        <option value=""></option>
                                        <option value="1">Department of Information Systems</option>
                                        <option value="2">Department of Computer Science</option>
                                        <option value="3">Department of Computer Enginnering</option>
                                    </select>
                                </div>
                                <div class="col-lg-3" style="font-weight: 500;">
                                    <label class="form-label ">Date</label>
                                    <input type="date" class="form-control shadow-none">
                                </div>
                                <div class="col-lg-3" style="font-weight: 500;">
                                    <label class="form-label ">Start Time</label>
                                    <input type="time" class="form-control shadow-none">
                                </div>
                                <div class="col-lg-3" style="font-weight: 500;">
                                    <label class="form-label ">End Time</label>
                                    <input type="time" class="form-control shadow-none">
                                </div>
                                <div class="col-lg-3" style="font-weight: 500;">
                                    <label class="form-label ">Capacity</label>
                                    <input type="number" class="form-control shadow-none">
                                </div>
                                <div class="col-lg-1  mb-2 text-center my-1">
                                <button type="submit" class="btn c_btn text-white shadow-none">Submit</button>   
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Rooms</h2>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 my-3">
                    <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                        <img src="https://www.teachhub.com/wp-content/uploads/2020/05/Classroom-Management-for-an-Effective-Learning-Environment-768x512.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5>Room Name</h5>
                            <div class="features mb-4">
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
                            <div class="d-flex justify-content-evenly mb-2">
                              <a href="#" class="text-decoration-none btn-sm text-white c_btn shadow-none">Book Now</a>
                              <a href="#" class="btn btn-sm  btn-outline-dark shadow-none">More details</a>  
                            </div>
                         </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 my-3">
                    <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                        <img src="https://www.teachhub.com/wp-content/uploads/2020/05/Classroom-Management-for-an-Effective-Learning-Environment-768x512.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5>Room Name</h5>
                            <div class="features mb-4">
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
                            <div class="d-flex justify-content-evenly mb-2">
                              <a href="#" class="text-decoration-none btn-sm text-white c_btn shadow-none">Book Now</a>
                              <a href="#" class="btn btn-sm  btn-outline-dark shadow-none">More details</a>  
                            </div>
                         </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 my-3">
                    <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                        <img src="https://www.teachhub.com/wp-content/uploads/2020/05/Classroom-Management-for-an-Effective-Learning-Environment-768x512.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5>Room Name</h5>
                            <div class="features mb-4">
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
                            <div class="d-flex justify-content-evenly mb-2">
                              <a href="#" class="text-decoration-none btn-sm text-white c_btn shadow-none">Book Now</a>
                              <a href="#" class="btn btn-sm  btn-outline-dark shadow-none">More details</a>  
                            </div>
                         </div>
                        </div>
                    </div>
                    <div class="col-lg-12 text-center mt-5">
                          <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms >></a>
                        </div>
                </div>
            </div>
            <!--Contact Us-->
            <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Reach Us</h2>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
                    <iframe class="w-100 rounded" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3102.0909274264154!2d50.516996194537676!3d26.050858896268927!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e484d5602da4725%3A0xbf673baa7596c6cd!2z2KzYp9mF2LnYqSDYp9mE2KjYrdix2YrZhg!5e0!3m2!1sar!2sbh!4v1733377242398!5m2!1sar!2sbh" height="320" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="bg-white p-4 rounded mb-4">
                            <h5>Call Us</h5>
                            <a href="tel:+39700000000" class="d-in-line-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i> +39700000000</a>
                            <br>
                            <a href="tel:+39717155355" class="d-in-line-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i> +39717155355</a>
                        </div>
                        <div class="bg-white p-4 rounded mb-4">
                            <h5>Follow Us</h5>
                            <a href="https://x.com/uobedubh?lang=ar" class="d-in-line-block mb-2">
                                <span class="badge bg-light text-dark fs-6 p-2"><i class="bi bi-twitter-x"></i> X</span>
                            </a>
                            <br>
                            <a href="https://www.facebook.com/MyUOB/" class="d-in-line-block mb-2">
                                <span class="badge bg-light text-dark fs-6 p-2"><i class="bi bi-facebook"></i> Facebook</span>
                            </a>
                            <br>
                            <a href="https://www.instagram.com/uobedubh/?hl=ar" class="d-in-line-block mb-2">
                                <span class="badge bg-light text-dark fs-6 p-2"><i class="bi bi-instagram"></i> Instagram</span>
                            </a>
                            <br>
                            <a href="https://www.tiktok.com/discover/university-of-bahrain?lang=ar" class="d-in-line-block mb-2">
                                <span class="badge bg-light text-dark fs-6 p-2"><i class="bi bi-tiktok"></i> Tiktok</span>
                            </a>
                            <br>
                            <a href="https://www.youtube.com/@uobedubh" class="d-in-line-block mb-2">
                                <span class="badge bg-light text-dark fs-6 p-2"><i class="bi bi-youtube"></i> Youtube</span>
                            </a>
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