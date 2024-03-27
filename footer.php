<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!--Google fonts-->
    <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
</head>
<body>
<!--footer-->
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


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
  crossorigin="anonymous"></script>
  <script>
    // JavaScript to handle switching to the registration tab when "Register" link is clicked
    document.getElementById("registerLink").addEventListener("click", function(event) {
      event.preventDefault(); // Prevent default link behavior
      $('#tab-register').tab('show'); // Switch to the registration tab
    });
  </script>
</body>

</html>