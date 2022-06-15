<html>
<head>
	<title>PAYMENT</title>
	  <link rel="stylesheet" type="text/css" href="css/payment.css">
	<!-- <script src="https://kit.fontawesome.com/a076d05399.js"></script> -->
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Material Design for Bootstrap</title>
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

     <div class="row">
  <div class="col-75">
    <div class="container">
      

        <div class="row">
          <div class="detail">
            <h3>Billing Address</h3>
            <label for="fname">Full Name</label>
            <input type="text" name="firstname" placeholder="Akshay R. Singh">
            <label for="email">Email</label>
            <input type="text" name="email" placeholder="akshay@example.com">
            <label for="adr">Address</label>
            <input type="text" name="address" placeholder="542 Patil Park Satpur">
            <label for="city">City</label>
            <input type="text" name="city" placeholder="Nashik">

            <div class="row">
              <div class="detail">
                <label for="state">State</label>
                <input type="text" name="state" placeholder="State Name">
              </div>
              <div class="detail">
                <label for="zip">Zip</label>
                <input type="text" name="zip" placeholder="422010">
              </div>
            </div>
          </div>

          <div class="detail">
            <h3>Payment</h3>
            <label for="fname">All Cards Accepted</label><br>
            <label for="cname">Name on Card</label>
            <input type="text" name="cardname" placeholder="Akshay Singh">
            <label for="ccnum">Credit card number</label>
            <input type="text" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
            <input type="text" name="expmonth" placeholder="September">

            <div class="row">
              <div class="detail">
                <label for="expyear">Exp Year</label>
                <input type="text" name="expyear" placeholder="2018">
              </div>
              <div class="detail">
                <label for="cvv">CVV</label>
                <input type="text" name="cvv" placeholder="352">
              </div>
            </div>
          </div>

        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <input type="submit" value="Continue to checkout" class="btn">
      
    </div>
  </div>

  <div class="right-box">
    <div class="container">
      <h4>Cart
        <span class="price" style="color:black">
          <i class="fa fa-shopping-cart"></i>
          <b>4</b>
        </span>
      </h4>
      <p><a href="#">Product 1</a> <span class="price">$15</span></p>
      <p><a href="#">Product 2</a> <span class="price">$5</span></p>
      <p><a href="#">Product 3</a> <span class="price">$8</span></p>
      <p><a href="#">Product 4</a> <span class="price">$2</span></p>
      <hr>
      <p>Total <span class="price" style="color:black"><b>$30</b></span></p>
    </div>
  </div>
</div> 



    <div class="clr"></div>
    <!-- FOOTER -->
    <?php
    include"footer.php"
    ?>
</body>
</html>