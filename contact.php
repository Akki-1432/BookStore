<html>
<head>
	<title>CONTACT US</title>
	  <link rel="stylesheet" type="text/css" href="css/contact.css">
	<!-- <script src="https://kit.fontawesome.com/a076d05399.js"></script> -->
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Material Design for Bootstrap</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />

</head>
<body>
    <!-- HEADER -->
    <?php
    include"header.php"
    ?>
    <div class="clr"></div>
        <section class="contact">
            <div class="content">
                <h2>Contact Us</h2>
                <!-- <p></p> -->
            </div>
            <div class="container">
                <div class="contactinfo">
                    <div class="box">
                        <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i>
                        </div>
                        <div class="text">
                            <h3>Address</h3>
                            <p>Room no.145 Patil park,<br>Satpur,Nashik,<br>422010</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i>
                        </div>
                        <div class="text">
                            <h3>Phone</h3>
                            <p>8929989268</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i>
                        </div>
                        <div class="text">
                            <h3>Email</h3>
                            <p>brandedakki@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="contactform">
                    <form>
                        <h2>Send Message</h2>
                        <div class="inputbox">
                            <input type="text" name="" required="required">
                            <span>Full Name</span>
                        </div>
                        <div class="inputbox">
                            <input type="text" name="" required="required">
                            <span>Email</span>
                        </div>
                        <div class="inputbox">
                            <textarea required="required"></textarea>
                            <span>Type your Message....</span>
                        </div>
                        <div class="inputbox">
                            <input type="submit" name="" value="Send">
                        </div>
                    </form>
                </div>
            </div>    
        </section>

    <div class="clr"></div>
    <!-- FOOTER -->
    <?php
    include"footer.php"
    ?>
</body>
</html>