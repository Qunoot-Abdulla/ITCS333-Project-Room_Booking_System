<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>UOB Room Booking-Rooms</title>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
            <?php require'inc/links.php'; ?>
        </head>
        <!--Styles-->
        <style>
            
        </style>
        <body class="bg-light">
            <!--link with header.php-->
            <?php require'inc/header.php'?>
            <div class="my-5 px-4">
                <h2 class="fw-bold h-font text-center">Rooms</h2>
                <div class="h-line bg-dark"></div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 px-lg-0">
                <nav class="navbar navbar-expand-lg  navbar-light  rounded shadow">
                    <div class="container-fluid flex-lg-column align-items-stretch">
                        <h4 class="mt-2">Filters</h4>
                        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse flex-column mt-2" id="filterDropdown">
                            <div class="border bg-light p-3 rounded mb-3 ">
                                <h5 clas="mb-3" style="font-size: 18px;">Check Availability</h5>
                                    <label class="form-label">Department</label>
                                    <select class="form-select shadow-none mb-3" >
                                        <option value=""></option>
                                        <option value="1">Department of Information Systems</option>
                                        <option value="2">Department of Computer Science</option>
                                        <option value="3">Department of Computer Enginnering</option>
                                    </select>
                                    <label class="form-label mb-3">Date</label>
                                    <input type="date" class="form-control shadow-none mb-3">
                                    <label class="form-label ">Start Time</label>
                                    <input type="time" class="form-control shadow-none mb-3">
                                    <label class="form-label">End Time</label>
                                    <input type="time" class="form-control shadow-none mb-3">
                                    <label class="form-label ">Capacity</label>
                                    <input type="number" class="form-control shadow-none">
                        </div>
                        
                            <div class="border bg-light p-3 rounded mb-3 w-100">
                                <h5 clas="mb-3" style="font-size: 18px;">Equipments</h5> 
                                <div class="mb-2">
                                    <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                                    <label class="form-label mb-3" for="f1">Computer</label>
                                    <div class="mb-2">
                                    <input type="checkbox" id="f2" class="form-check-input shadow-none me-1">
                                    <label class="form-label mb-3" for="f2">Projector</label>
                                    <div class="mb-2">
                                    <input type="checkbox" id="f3" class="form-check-input shadow-none me-1">
                                    <label class="form-label mb-3" for="f3">Whiteboard</label>
                                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                    
                    </nav>
                    </div>
                    <div class="col-lg-9 col-md-12 px-4">
                    <div class="card mb-4 border-0 shadow">
                        <div class="row g-0 p-3 align-items-center">
                            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                            <img src="https://www.teachhub.com/wp-content/uploads/2020/05/Classroom-Management-for-an-Effective-Learning-Environment-768x512.jpg" class="img-fluid rounded">
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
                        <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                            <a href="#" class="btn text-decoration-none btn-sm text-white c_btn shadow-none mb-2 w-100">Book Now</a>
                            <a href="room_details.php" class="btn btn-sm  btn-outline-dark shadow-none w-100">More details</a>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4 border-0 shadow">
                        <div class="row g-0 p-3 align-items-center">
                            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                            <img src="https://www.teachhub.com/wp-content/uploads/2020/05/Classroom-Management-for-an-Effective-Learning-Environment-768x512.jpg" class="img-fluid rounded">
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
                        <div class="col-md-2 text-center">
                            <a href="#" class="btn text-decoration-none btn-sm text-white c_btn shadow-none mb-2 w-100">Book Now</a>
                            <a href="room_details.php" class="btn btn-sm  btn-outline-dark shadow-none w-100">More details</a>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4 border-0 shadow">
                        <div class="row g-0 p-3 align-items-center">
                            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                            <img src="https://www.teachhub.com/wp-content/uploads/2020/05/Classroom-Management-for-an-Effective-Learning-Environment-768x512.jpg" class="img-fluid rounded">
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
                        <div class="col-md-2 text-center">
                            <a href="#" class="btn text-decoration-none btn-sm text-white c_btn shadow-none mb-2 w-100">Book Now</a>
                            <a href="room_details.php" class="btn btn-sm  btn-outline-dark shadow-none w-100">More details</a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        
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