<!doctype html>
<html>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!--Google fonts-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">


  <!--fontawsome-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!--custom CSS-->
  <link rel="stylesheet" href="./css/style.css">

  <title>ALL SCHOOL SITE</title>
</head>

<body>
  <!--Narvbar start-->
  <nav class="navbar navbar-expand-lg navbar-blue bg-dark">
    <div class="container">
      <a class="  fw-bold" href="./tuni.php">ALL SCHOOL SITE</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon text-primary"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav m-auto mb-2 mb-lg-0">
          <li class="nav-item mr-1">
            <a class="nav-link active" aria-current="page" href="./home.php">Home</a>
          </li>
          
          
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Type of school
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="form.php">private</a></li>
            <li><a class="dropdown-item" href="./public.php">public</a></li>
            <li><a class="dropdown-item" href="./international.php">international</a></li>
          </ul>
        </li>
          <li class="nav-item">
            <a class="nav-link" href="#">school search</a>
          </li>

        </ul>
        <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="./register.php">register</a>
          </li>
        </ul>
        <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="./login.php">login</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  <!--Narvbar end-->

  <!-- Register buttons -->
  <section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
            <form>

              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="firstName" class="form-control form-control-lg" />
                    <label class="form-label" for="firstName">First Name</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="lastName" class="form-control form-control-lg" />
                    <label class="form-label" for="lastName">Last Name</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 d-flex align-items-center">

                  <div class="form-outline datepicker w-100">
                    <input type="text" class="form-control form-control-lg" id="birthdayDate" />
                    <label for="birthdayDate" class="form-label">Birthday</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <h6 class="mb-2 pb-1">Gender: </h6>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="femaleGender"
                      value="option1" checked />
                    <label class="form-check-label" for="femaleGender">Female</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="maleGender"
                      value="option2" />
                    <label class="form-check-label" for="maleGender">Male</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="otherGender"
                      value="option3" />
                    <label class="form-check-label" for="otherGender">Other</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="email" id="emailAddress" class="form-control form-control-lg" />
                    <label class="form-label" for="emailAddress">Email</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="tel" id="phoneNumber" class="form-control form-control-lg" />
                    <label class="form-label" for="phoneNumber">Phone Number</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-12">

                  <select class="select form-control-lg">
                    <option value="1" disabled>Choose option</option>
                    <option value="2">Subject 1</option>
                    <option value="3">Subject 2</option>
                    <option value="4">Subject 3</option>
                  </select>
                  <label class="form-label select-label">Choose option</label>

                </div>
              </div>

              <div class="mt-4 pt-2">
                <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--contact us-->
<main class="mt-5">
  <div class="container">
    <!--section Head start-->
    <h2 class="h2-responsive fw-bold text-center my-2">
    The type of school you want
    </h2>
    <p class="text-center w-responsive mx-auto mb-1"></p>
    <!--section Head End-->
    <!--Section: Contact v.2-->
<section class="mb-4">

  <!--Section heading-->
  <h2 class="h1-responsive font-weight-bold text-center my-4"></h2>
  <!--Section description-->
  <p class="text-center w-responsive mx-auto mb-5"></p>

  <div class="row">

      <!--Grid column-->
      <div class="col-md-6 mb-md-0 mb-5">
          <form id="contact-form" name="contact-form" action="mail.php" method="POST">

              <!--Grid row-->
              <div class="row">

                  <!--Grid column-->
                  <div class="col-md-6">
                      <div class="md-form mb-0">
                          <input type="text" id="name" name="" class="form-control">
                          <label for="name" class="">The amount of school fees</label>
                      </div>
                  </div>
                  <!--Grid column-->

                  <!--Grid column-->
                  <div class="col-md-6">
                      <div class="md-form mb-0">
                          <input type="text" id="location" name="location" class="form-control">
                          <label for="location" class="">location</label>
                      </div>
                  </div>
                  <!--Grid column-->

              </div>
              <!--Grid row-->

              <!--Grid row-->
              <div class="row">
                <div class="col-md-12">
                    <div class="md-form mb-0">
                      <select class="form-select" size="1" aria-label="size 1 select example">
                        <option selected> select menu for subject</option>
                        <option value="1">English</option>
                        <option value="2">Kiswahili</option>
                        <option value="3">Mathematics</option>
                        <option value="4">Biology</option>
                        <option value="5">Physics</option>
                        <option value="6">Chemistry</option>
                        <option value="7">General Science</option>
                        <option value="8">History and Government</option>
                        <option value="9">Geography</option>
                        <option value="10">Christian Religious Education (CRE)</option>
                        <option value="11">Islamic Religious Education (IRE)</option>
                        <option value="12">Home Science</option>
                        <option value="13">Arty and Design</option>
                        <option value="14">Agriculture</option>
                        <option value="15">Woodwork</option>
                        <option value="16">Metalwork</option>
                        <option value="17">Building Construction</option>
                        <option value="18">Power Mechanics</option>
                        <option value="19">Electricity</option>
                        <option value="20">Drawing and Design</option>
                        <option value="21">Aviation Technology</option>
                        <option value="22">Computer studies</option>
                        <option value="23">French</option>
                        <option value="24">German</option>
                        <option value="25">Arabic</option>
                        <option value="26">Kenya Sign Language (KSL)</option>
                        <option value="27">Music</option>
                        <option value="28">Business Studies</option>
                        
                        

                      </select>
                        <label for="subject" class="">The Subject you want to learn</label>
                    </div>
                </div>
            </div>
              <!--Grid row-->

              <!--Grid row-->
              <div class="row">

                  <!--Grid column-->
                  <div class="col-md-12">

                      <div class="md-form">
                          <textarea type="text" id="message" name="message" rows="6" class="form-control md-textarea"></textarea>
                          <label for="message">what you want from the school</label>
                      </div>

                  </div>
              </div>
              <!--Grid row-->

          </form>

          <div class="text-center text-md-left md-3">
              <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Send</a>
          </div>
          <div class="status"></div>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-md-3 text-center">
          <ul class="list-unstyled mb-0">
              

              
              
          </ul>
      </div>
      <!--Grid column-->

  </div>

</section>
<!--Section: Contact v.2-->
  </div>
</main>
 

    <!-- Footer -->
    <footer class="text-center text-lg-start bg-primary text-white">
      <!-- Section: Social media -->
      <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
        <!-- Left -->
        <div class="me-5 d-none d-lg-block">
          <span>Get connected with us on social networks:</span>
        </div>
        <!-- Left -->

<!-- Footer -->
<footer class="text-center text-lg-start bg-primary text-white">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
      <!-- Left -->
      <div class="me-5 d-none d-lg-block">
        <span>Get connected with us on social networks:</span>
      </div>
      <!-- Left -->

      <!-- Right -->
      <div>
        <a href="" class="me-4 text-reset">
          <i class="fa fa-facebook"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fa fa-twitter"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fa fa-google"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fa fa-instagram"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fa fa-linkedin"></i>

      </div>
      
  </footer>
  <!-- Footer -->
</header>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
  crossorigin="anonymous"></script>
</body>

</html>