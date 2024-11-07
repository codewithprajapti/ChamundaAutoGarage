<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chamunda Auto Garage & Service Station</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="header.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Cabin+Sketch:wght@400;700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Rye&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <div class="container-fluid mhed_main"> <!-- Main Header Container Started -->

        <div class="row mhed_fr_main"> <!-- Main Header Container Main First Row Started -->

            <div class="col-md-4 mhed_add_main"> <!-- Address Main Container Started -->

                <i class="fa-solid fa-location-dot fa-xl"></i> &nbsp;&nbsp;Vanthali HighWay Road Timbavadi Junagadh

            </div> <!-- Address Main Container Completed -->


            <div class="col-md-6 mhed_sh_nm"> <!-- Shop Name Main Container Started -->

                Jay Chamunda Auto Garage And Service Station

            </div> <!-- Shop Name Main Container Completed -->

            <div class="col-md-2 mhed_icn"> <!-- Icon Main Container Started -->

                <a href="adduser.php"><button type="button" class="btn btn-outline-warning lo_btn">Add User</button></a>

            </div> <!-- Icon Main Container Completed -->

        </div> <!-- Main Header Container Main First Row Started -->


        <div class="row hed_sr_main"> <!-- Main Hed Second Row Starting -->

            <div class="col-md-3 hed_sr_logo_main">

                <span>Welcome To Dashbord Mr. <?php echo strtoupper($_SESSION['usernam']); ?> </span>
            </div>




            <div class="col-md-5 hed_sr_menu_main">

                <ul class="menu_strip">
                    <li><a href="deshbord.php">Home</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <!-- <li><a href="feedback.php">Feedback</a></li> -->
                </ul>

            </div>

            <div class="col-md-4 hed_sr_time_main">

                <div id="time" class="clock"></div>
                <a href="logout.php"><button type="button" class="btn btn-outline-warning lo_btn">LogOut</button></a>
            </div> <!-- -->


        </div> <!-- Main Hed Second Row Ending -->


    </div> <!-- Main Header Container Completed -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

<script>

    function updateClock() {
        let now = new Date();
        let hours = now.getHours();
        let minutes = now.getMinutes();
        let seconds = now.getSeconds();
        let ampm = hours >= 12 ? 'PM' : 'AM';

        // Convert 24-hour clock to 12-hour format
        hours = hours % 12;
        hours = hours ? hours : 12; // the hour '0' should be '12'

        // Add leading zeros to minutes and seconds
        minutes = minutes < 10 ? '0' + minutes : minutes;
        seconds = seconds < 10 ? '0' + seconds : seconds;

        let currentTime = hours + ':' + minutes + ':' + seconds + ' ' + ampm;

        // Display time in the HTML
        document.getElementById('time').textContent = currentTime;
    }

    // Update the clock every second
    setInterval(updateClock, 1000);

    // Initial call to display the time immediately when the page loads
    updateClock();



</script>

</html>