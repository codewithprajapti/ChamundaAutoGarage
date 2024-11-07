<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Compony Logo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- Links For Owl Crosole -->

  <link rel="stylesheet" href="owl.carousel.css">
  <link rel="stylesheet" href="owl.theme.default.css">

  <style>
    .hom_comp_main {

      margin-top: 5vh;

    }
  </style>


</head>

<body>

  <div class="container-fluid hom_comp_main">
    <div class="row">
      <div class="col-md-12">

        <div class="owl-carousel owl-theme">
          <div class="item">
            <img class="hom_comp_icn" src="heroicon.jpg" alt="" width="2vw" height="50vh">
          </div>
          <div class="item">
            <img src="hondaicon.png" alt="" height="50vh">
          </div>
          <div class="item">
            <img src="castrolicon.jpg" alt="" height="50vh">
          </div>
          <div class="item">
            <img class="hom_comp_icn" src="heroicon.jpg" alt="" width="2vw" height="50vh">
          </div>
          <div class="item">
            <img src="hondaicon.png" alt="" height="50vh">
          </div>
          <div class="item">
            <img src="castrolicon.jpg" alt="" height="50vh">
          </div>


        </div>

      </div>
    </div>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

<!-- Script For Owl Crosole -->

<script src="jquery.min.js"></script>
<script src="owl.carousel.min.js"></script>

<script>

  $('.owl-carousel').owlCarousel({
    loop: true,
    autoWidth: true,
    margin: 40,
    items: 5,
    dots: false,
    autoplay: true,
    autoplayTimeout: 1000,

    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 3
      },
      1000: {
        items: 5
      }
    }
  })

</script>

</html>