<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gym</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="icon/all.min.css" />
    <link rel="stylesheet" href="icon/fontawesome.min.css" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body class="bg-dark">
    <!-- navbar start -->
    <nav class="navbar navbar-expand-lg" id="navbar">
      <div class="container-fluid">
        <a class="navbar-brand" href="">
          <img src="img/logo.png" class="img-fluid" alt="" />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="fa fa-bars text-light"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="me-auto mx-auto text-center">
            <li class="">
              <a class="" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="">
              <a class="" aria-current="page" href="workout_request_insert.php"
                >Workout PLAN</a
              >
            </li>
            <li class="">
              <a class="" aria-current="page" href="Regisration.php"
                >Registration</a
              >
            </li>

            <!-- <li class="dropdown">
              <a
                class="dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                More files..
              </a>
              <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Registration</a></li>
                <li><a class="dropdown-item" href="#">Sign in</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li>
                  <a class="dropdown-item" href="workout.html">workout plan</a>
                </li>
              </ul>
            </li> -->

            <!-- <input
              class="form-control me-2"
              type="search"
              placeholder="Search"
              aria-label="Search"
            />
            <button class="btn btn-outline-success" type="submit">
              Search
            </button> -->
          </ul>
          <div class="ms-auto text-center">
            <button type="button" class="btn btn-outline-dark me-2">
              <a
                class="text-light"
                aria-current="page"
                href="clients_account.php"
                >Sign in</a
              >
            </button>
            <button type="button" class="btn btn-outline-dark">
              <a class="text-white" aria-current="page" href="signin.php"
                >Sign up</a
              >
            </button>
          </div>
        </div>
      </div>
    </nav>
    <!-- navbar end -->

    <!-- home section start -->
    <section id="homesection">
      <img src="img/hero/hero-1.jpg" alt="Hero img" class="img-fluid" />

      <!-- <div class="container-fluid pt-5">
        <div class="row pt-5">
          <div class="col-12 text-lg-end pt-5">
            <h3>SHAPE YOUR BODY</h3>
          </div>
        </div>
      </div> -->
    </section>
    <!-- home section end -->

    <!-- chose section start -->
    <section class="" style="background-color: black">
      <div class="container-fluid text-white px-4 pb-4">
        <div class="row gy-4 pt-2">
          <div class="col-lg-12">
            <div class="text-center mt-5">
              <span class="fs-3 fw-bolder text-warning mt-5">Why chose us?</span>
              <h2 class="fw-bolder mt-3">PUSH YOUR LIMITS FORWARD</h2>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="chose1">
              <span class="fa fa-bicycle"></span>
              <h4 class="fw-bolder mt-2 mb-2">Modern equipment</h4>
              <p class="text-muted">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut dolore facilisis.
              </p>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="chose1">
              <span class="fa fa-heart-circle-bolt"></span>
              <h4 class="fw-bolder mt-2 mb-2">Healthy nutrition plan</h4>
              <p class="text-muted">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut dolore facilisis.
              </p>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="chose1">
              <span class="fa fa-tree-city"></span>
              <h5 class="fw-bolder mt-2 mb-2">Proffesponal training plan</h5>
              <p class="text-muted">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut dolore facilisis.
              </p>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="chose1">
              <span class="fa fa-heart-circle-minus"></span>
              <h5 class="fw-bolder mt-2 mb-2">Unique to your needs</h5>
              <p class="text-muted">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut dolore facilisis.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- chose section end -->

    <!-- Our Classes start -->
    <section class="mb-5">
      <div class="container text-light pt-5">
        <div class="row gy-4 pt-5 pb-3">
          <div class="text-center py-3">
            <span class="fw-bold text-warning">Our Classes</span>
            <h2 class="fw-bolder">WHAT WE CAN OFFER</h2>
          </div>
        

        <div class="col-lg-4 col-md-6 text-center" id="classes">
          <div class="w-100 text-center">
            <div class="">
              <img
                src="img/classes/class-1.jpg"
                alt=""
                class="img-fluid w-100"
              />
            </div>  
            <div class="text-center w-100 mx-auto bg-gradient" id="chover">
              <span class="text-warning me-5 mt-2">STRENGTH</span>
              <h5 class="text-light ms-5 mt-2">Weightlifting</h5>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 text-center" id="classes">
          <div class="w-100 text-center">
            <div class="">
              <img
                src="img/classes/class-2.jpg"
                alt=""
                class="img-fluid w-100"
              />
            </div>
            <div class="text-center w-100 mx-auto bg-gradient" id="chover">
              <span class="text-warning me-5 mt-2">Cardio</span>
              <h5 class="text-light ms-5 mt-2">Indoor cycling</h5>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 text-center" id="classes">
          <div class="w-100 text-center">
            <div class="">
              <img
                src="img/classes/class-3.jpg"
                alt=""
                class="img-fluid w-100"
              />
            </div>
            <div class="text-center w-100 mx-auto bg-gradient" id="chover">
              <span class="text-warning me-5 mt-2">STRENGTH</span>
              <h5 class="text-light ms-5 mt-2">Kettlebell power</h5>
            </div>
          </div>
        </div>
        
        <div class="col-lg-6 col-md-6 text-center" id="classes">
          <div class="w-100 text-center">
            <div class="">
              <img
                src="img/classes/class-4.jpg"
                alt=""
                class="img-fluid w-100"
              />
            </div>
            <div class="text-center w-100 mx-auto bg-gradient" id="chover">
              <span class="text-warning me-5 mt-2">Cardio</span>
              <h5 class="text-light ms-5 mt-2">Indoor cycling</h5>
            </div>
          </div>
        </div>

        <div class="col-lg-6 col-md-12 text-center" id="classes">
          <div class="w-100 text-center">
            <div class="">
              <img
                src="img/classes/class-5.jpg"
                alt=""
                class="img-fluid w-100"
              />
            </div>
            <div class="text-center w-100 mx-auto bg-gradient" id="chover">
              <span class="text-warning me-5 mt-2">Training</span>
              <h5 class="text-light ms-5 mt-2">Boxing</h5>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Our Classes end -->



    <!-- card section start -->
    <section class="pb-5" style="background-color: black;">
      <div class="container">
        <div class="row gy-4 text-center">
          <div class="text-center mt-5 pt-5 pb-3">
            <span class="text-warning fw-bold fs-3">Our Plan</span>
            <h2 class="text-light">Choose your pricing plan</h2>
        </div>
          <div class="col-lg-4 col-md-6 text-center">
            <div class="card" id="pricecard">

              <div class="card-body text-center">
                
                  <div class="text-center">
                      <h3 class="text-light">Class drop-in</h3>
                      <div >
                          <h1 class="text-warning fw-bolder">$ 39.0</h1>
                          <h4 class="text-muted">SINGLE CLASS</h4>
                      </div>
                      <div class="text-muted text-start ps-5 pt-3">
                          <span class="d-block mt-2">Free riding</span>
                          <span class="d-block mt-2">Unspanmited equipments</span>
                          <span class="d-block mt-2">Personal trainer</span>
                          <span class="d-block mt-2">Weight losing classes</span>
                          <span class="d-block mt-2">Month to mouth</span>
                          <span class="d-block mt-2">No time restriction</span>
                      </div>
                      <a href="#" class="btn btn-outline-warning w-100 mt-4 mb-2">Enroll now</a>
                      
                  </div>
             
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 text-center">
            <div class="card" id="pricecard">

              <div class="card-body text-center">
                
                  <div class="text-center">
                      <h3 class="text-light">12 Month unlimited</h3>
                      <div >
                          <h1 class="text-warning fw-bolder">$ 99.0</h1>
                          <h4 class="text-muted">SINGLE CLASS</h4>
                      </div>
                      <div class="text-muted text-start ps-5 pt-3">
                          <span class="d-block mt-2">Free riding</span>
                          <span class="d-block mt-2">Unspanmited equipments</span>
                          <span class="d-block mt-2">Personal trainer</span>
                          <span class="d-block mt-2">Weight losing classes</span>
                          <span class="d-block mt-2">Month to mouth</span>
                          <span class="d-block mt-2">No time restriction</span>
                      </div>
                      <a href="#" class="btn btn-outline-warning w-100 mt-4 mb-2">Enroll now</a>
                      
                  </div>
             
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-12 text-center">
            <div class="card" id="pricecard">

              <div class="card-body text-center">
                
                  <div class="text-center">
                      <h3 class="text-light">6 Month unlimited</h3>
                      <div >
                          <h1 class="text-warning fw-bolder">$ 59.0</h1>
                          <h4 class="text-muted">SINGLE CLASS</h4>
                      </div>
                      <div class="text-muted text-start ps-5 pt-3">
                          <span class="d-block mt-2">Free riding</span>
                          <span class="d-block mt-2">Unspanmited equipments</span>
                          <span class="d-block mt-2">Personal trainer</span>
                          <span class="d-block mt-2">Weight losing classes</span>
                          <span class="d-block mt-2">Month to mouth</span>
                          <span class="d-block mt-2">No time restriction</span>
                      </div>
                      <a href="#" class="btn btn-outline-warning w-100 mt-4 mb-2">Enroll now</a>
                      
                  </div>
             
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- card section end -->


    <!-- Gallery start  -->
    <section class="pt-5 pb-5" style="background-color: black;">
      <div class="container-fluid">
        <div class="row gy-2">
          <div class="col-lg-6 text-center">
            <div>
              <img src="img/gallery/gallery-1.jpg" alt="" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-3 text-center">
            <div>
              <img src="img/gallery/gallery-2.jpg" alt="" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-3 text-center">
            <div>
              <img src="img/gallery/gallery-3.jpg" alt="" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-3 text-center">
            <div>
              <img src="img/gallery/gallery-4.jpg" alt="" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-3 text-center">
            <div>
              <img src="img/gallery/gallery-5.jpg" alt="" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-6 text-center">
            <div>
              <img src="img/gallery/gallery-6.jpg" alt="" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Gallery end -->


    <!-- contact section start -->

    <section class="pt-2 pb-2">
      <div class="container text-light pt-5 pb-5">
        <div class="row gy-5">
          <div class="col-lg-4 col-md-6  text-center" id="contactcol">
           
              <h1 class="fa fa-location-dot" id="contactspan"></h1>
            <span class="d-block text-muted pt-2">333 Middle Winchendon Rd, Rindge,
              NH 03461</span>
           
            
          </div>
          <div class="col-lg-4 col-md-6  text-center" id="contactcol">
           
            <h1 class="fa fa-mobile-android-alt" id="contactspan"></h1>
            <div class="text-muted pt-2">
              <span>125-711-811</span>
              <span>125-668-886</span>
          </div>
         
          
        </div>
        <div class="col-lg-4 col-md-12  text-center" id="contactcol">
           
          <h1 class="fa fa-envelope-circle-check" id="contactspan"></h1>
          <div class="text-muted pt-2">
            <span>Support.gymcenter@gmail.com</span>
            
        </div>
       
        
      </div>
        </div>
      </div>
    </section>

    <!-- contact section end -->


    <!-- footer section start -->
    <section class="pt-5 pb-5" style="background-color: black;">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 text-center">
            <img src="img/logo.png" class="img-fluid" alt="">
            <p class="text-muted pt-4 ">Lorem ipsum dolor sit amet, ut labore dolore Lorem ipsum dolor sit amet, ut labore doloreLorem ipsum dolor sit amet, ut labore doloreLorem ipsum dolor sit amet, ut labore doloreLorem ipsum dolor sit amet, ut labore doloreLorem ipsum dolor sit amet, ut labore doloremagna aliqua endisse ultrices gravida lorem.</p>
            <i class="fab text-light ms-2 fa-facebook"></i>
            <i class="fab text-light ms-2 fa-whatsapp"></i>
            <i class="fab text-light ms-2 fa-youtube"></i>
            <i class="fab text-light ms-2 fa-twitter"></i>
            <i class="fab text-light ms-2 fa-instagram"></i>
          </div>
          <div class="col-lg-6 text-center">
            <h3>SUPPORT</h3>
            <ul class="me-auto mx-auto text-center">
              <li class="d-block mt-2">
                <a class="" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="d-block mt-2">
                <a class="" aria-current="page" href="workout_request_insert.php"
                  >Workout PLAN</a
                >
              </li>
              <li class="d-block mt-2">
                <a class="" aria-current="page" href="Regisration.php"
                  >Registration</a
                >
              </li>
  
            </ul>
            <div class="ms-auto text-center mt-3 ">
              <button type="button" class="btn btn-outline-warning me-2">
                <a
                  class="text-light"
                  aria-current="page"
                  href="clients_account.php"
                  >Sign in</a
                >
              </button>
              <button type="button" class="btn btn-outline-warning">
                <a class="text-white" aria-current="page" href="signin.php"
                  >Sign up</a
                >
              </button>
            </div>
          </div>
        
        </div>
      </div>
    </section>
    <!-- footer section end -->


    <!-- sticky button start -->
    <button id="stickybtn" type="button" class="btn"  style="position: fixed; right: 30px; display: none; bottom: 50px; width: 50px; height: 50px; background-color: orangered; border-radius: 50%;">
      <span class="fa fa-arrow-up text-light"></span>
    </button>
    <!-- sticky button end -->

    <script src="custom.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.js"></script>
  </body>
</html>
