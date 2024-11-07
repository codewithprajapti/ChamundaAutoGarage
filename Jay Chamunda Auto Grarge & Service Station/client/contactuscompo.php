<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="contactuscompo.css">
</head>
<body>
    <div class="container-fluid mt-5">
        <div class="row">
            <!-- Contact Form Section -->
            <div class="col-md-6 shadow p-3 mb-5 bg-white rounded">
                <h6 class="text-uppercase text-danger">Send Us a Message</h6>
                <h2 class="font-weight-bold">Get in Touch.</h2>
                <p>Get in touch with us for any inquiries, feedback, or support – we're here to help!</p>
                
                <form id="contactForm" action="contactform.php" method="POST" onsubmit="return validateForm()">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="nm" placeholder="Name" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="phone">Phone Number</label>
                            <input type="text" class="form-control" id="phone" name="ph" placeholder="Phone Number" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="em" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" class="form-control" id="subject" name="sub" placeholder="Subject" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" id="message" name="mgs" rows="4" placeholder="Message" required></textarea>
                    </div>
                    <input type="submit" name="sbt" class="btn btn-danger"></input>
                </form>
            </div>
            
            <!-- Contact Information Section -->
            <div class="col-md-6">
                <h6 class="text-uppercase text-danger">Direction</h6>
                <h2 class="font-weight-bold">Don't Hesitate to Chamunda Garage.</h2>
                <p>"Reach out to us anytime through the contact form below or via the provided contact details — we're here to help!"</p>
                
                <div class="contact-info">
                    <h5>Junagadh</h5>
                    <p><i class="fas fa-map-marker-alt"></i> Vanthali HighWay Road Timbavadi Junagadh</p>
                    <p><i class="fas fa-envelope"></i> support.jaychamunda@gmail.com</p>
                    <p><i class="fas fa-phone-alt"></i> +91 - 9265640996</p>
                    <br>                    
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d118788.09912573325!2d70.2893047433594!3d21.502701899999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395801f62c3603af%3A0x816a4579d8ea8b76!2sChamunda%20Auto%20Garage%20And%20Service%20Station!5e0!3m2!1sen!2sin!4v1722604797039!5m2!1sen!2sin" width="100%" height="330" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <script>
        function validateForm() {
            // Name validation: Only letters
            var name = document.getElementById("name").value;
            var nameRegex = /^[A-Za-z\s]+$/;
            if (!nameRegex.test(name)) {
                alert("Name should contain only letters.");
                return false;
            }

            // Phone number validation: Only numbers and exactly 10 digits
            var phone = document.getElementById("phone").value;
            var phoneRegex = /^[0-9]{10}$/;
            if (!phoneRegex.test(phone)) {
                alert("Please enter a valid 10-digit phone number.");
                return false;
            }

            // Email validation: Standard email regex
            var email = document.getElementById("email").value;
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                alert("Please enter a valid email address.");
                return false;
            }

            // Subject validation: Not empty
            var subject = document.getElementById("subject").value;
            if (subject.trim() === "") {
                alert("Subject cannot be empty.");
                return false;
            }

            // Message validation: Not empty
            var message = document.getElementById("message").value;
            if (message.trim() === "") {
                alert("Message cannot be empty.");
                return false;
            }

            return true;
        }
    </script>
</body>
</html>
