<!DOCTYPE html>

<?php
    include 'connection.php';

    if(isset($_POST['booked']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $contactNumber = $_POST['contactnumber'];
        $schoolName = $_POST['schoolname'];
        $message = $_POST['message'];

        $sql = ("INSERT INTO `main`(`name`, `email`, `contactnumber`, `schoolname`, `message`) VALUES ('$name',' $email','$contactNumber','$schoolName','$message') ") or die($mysqli->error);

        if (mysqli_query($conn, $sql))
        {
            
        }
        else
        {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
        header('Location:homepage.html');
    }    
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Educ+</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/index.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="js/backtotop.js" type="text/javascript"></script>
</head>
<body>
    <button onclick="topFunction()" class="btn btn-danger btn-lg" id="myBtn"><i class="fa fa-arrow-circle-up fa-2x"></i></button>
    <section class="background">
        <nav class="container">
            <div class="row align-items-centerd-flex justify-content-between pb-3">
                <a href="homepage.html" class="col-1">
                    <img src="assets/img/educlogo.png" alt="Educ+ logo" class="picture">
                </a>
                <div class="col-7 row align-items-center">
                    <div class="col d-flex justify-content-center navHover py-2">
                        <a href="homepage.html" class="navColor text-center">HOME</a>
                    </div>
                    <div class="col d-flex justify-content-center navHover py-2">
                        <a href="features.html" class="navColor text-center">FEATURES</a>
                    </div>
                    <div class="col d-flex justify-content-center navHover py-2">
                        <a href="security.html" class="navColor text-center">SECURITY</a>
                    </div>
                    <div class="col d-flex justify-content-center navHover py-2">
                        <a href="aboutus.html" class="navColor text-center">ABOUT US</a>
                    </div>
                    <div class="col d-flex justify-content-center navHover py-2">
                        <a href="contact.php" class="navColor text-center">CONTACT</a>
                    </div>
                </div>
            </div>
        </nav>
        <div class="container d-flex flex-column justify-content-center align-items-center text-center py-5 my-5">
            <h1 class="fontWeight py-5 w3-animate-top">Let us know what you think</h1>
            <p class="fs-4 sectionHomepage mb-5 pb-5 w3-animate-bottom">We would be more than pleased to respond to all of your inquiries and take feedback. Please enter the necessary information below, and we'll contact you right away.</p>
        </div>
        <div class="py-2"></div>
    </section>  
    <section class="pt-5 mt-5"  id="form">

        <div class="container parent">
            <div class="div1">
                <img src="assets/img/contact/contactus.png" class="picSize" alt="Contact Us picture">
            </div>
            <fieldset class="div2">
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="Name" class="form-label fs-5 fontWeight">Name</label>
                        <input type="text" class="form-control" id="Name" placeholder="eg. Juan Dela Cruz" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="Email" class="form-label fs-5 fontWeight">Email</label>
                        <input type="email" class="form-control" id="Name" placeholder="eg. juandelacruz@email.com" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="ContactNumber" class="form-label fs-5 fontWeight">Contact Number</label>
                        <input type="number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="11" class="form-control" id="Name" placeholder="eg. 09123456789" name="contactnumber" required>
                    </div>
                    <div class="mb-3">
                        <label for="SchoolName" class="form-label fs-5 fontWeight">School Name</label>
                        <input type="text" class="form-control" id="SchoolName" placeholder="eg. Juan Dela Cruz University" name="schoolname" required>
                    </div>
                    <div class="mb-3">
                        <label for="Message" class="form-label fs-5 fontWeight">Message</label>
                        <textarea class="form-control" id="Message" name="message" required></textarea>
                    </div>
                    <div class="mb-3 d-flex justify-content-end align-items-center">
                        <input class="btn btn-primary py-2 buttonStyle" type="submit" value="Submit" name="booked">
                    </div>
                </form>
            </fieldset>
        </div>
    </section>
    <section class="container-fluid mx-0 px-0 pt-5 mt-5">
        <div class="text-center titleFeatures pt-5">
            <h1 class="fontWeight pb-5">HOW TO FIND US</h1>
        </div>
        <div class="sectionMap">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3859.741213764276!2d121.07619201466566!3d14.670622289757954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b757c4112945%3A0xde31414f91701f32!2sThe%20Capital%20Inn!5e0!3m2!1sen!2sph!4v1657713232337!5m2!1sen!2sph" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <footer class="container-fluid footerBackground">
        <div class="container">
            <ul class="nav justify-content-center pb-2 pt-4">
                <li class="nav-item navHover">
                  <a class="nav-link navColor" href="homepage.html">Home</a>
                </li>
                <li class="nav-item navHover">
                  <a class="nav-link navColor" href="features.html">Features</a>
                </li>
                <li class="nav-item navHover">
                  <a class="nav-link navColor" href="security.html">Security</a>
                </li>
                <li class="nav-item navHover">
                    <a class="nav-link navColor" href="aboutus.html">About Us</a>
                </li>
                <li class="nav-item navHover">
                    <a class="nav-link navColor" href="contact.php">Contact</a>
                </li>
            </ul>
        </div>
        <div class="pb-3 pt-4">
            <p class="text-center fs-6 m-0">© 2022 Educ+ Co. All Rights Reserved.</p>
            <div class="d-flex justify-content-center align-items center">
                <img src="assets/img/educlogo.png" class="footerLogo text-center" alt="Educ+ logo">
            </div>      
        </div>
    </footer>
</body>
</html>