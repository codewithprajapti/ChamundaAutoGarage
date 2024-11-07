<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="homehistory.css">
</head>

<body>


    <div class="container-fluid hom_hist_main">

        <div class="row hom_hist_fr_main">
            <div class="col-md-8 hom_his_fr_lft">

                Chamunda Auto Garage has been running for <span class="counter"
                    data-countto="32" data-duration="5000">0</span>+ years

            </div>

            <div class="col-md-4 hom_his_fr_rgt">

                <button type="button" class="btn btn-outline-primary hom_hist_fr_btn">Visit Now!</button>

            </div>

        </div>

        <div class="row hom_hist_sr_main">

            <div class="col-md-4 hom_hist_sr_det">Customer Number</div>
            <div class="col-md-4 hom_hist_sr_det">Completed Services</div>
            <div class="col-md-4 hom_hist_sr_det">Machine Build</div>

        </div>

        <div class="row hom_hist_thr_main">

            <div class="col-md-4 hom_hist_thr_det"><span class="counter animate__animated animate__fadeInUp"
                    data-countto="5000" data-duration="5000">0</span>+</div>
            <div class="col-md-4 hom_hist_thr_det"><span class="counter animate__animated animate__fadeInUp"
                    data-countto="1000000" data-duration="2000">0</span>+</div>
            <div class="col-md-4 hom_hist_thr_det"><span class="counter animate__animated animate__fadeInUp"
                    data-countto="7999" data-duration="3000">0</span>+</div>



        </div>

    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

<!-- Script For Counter -->

<script>

    $(".counter").each(function () {
        var $this = $(this),
            countTo = $this.attr("data-countto");
        countDuration = parseInt($this.attr("data-duration"));
        $({ counter: $this.text() }).animate(
            {
                counter: countTo
            },
            {
                duration: countDuration,
                easing: "linear",
                step: function () {
                    $this.text(Math.floor(this.counter));
                },
                complete: function () {
                    $this.text(this.counter);
                }
            }
        );
    });




</script>

</html>