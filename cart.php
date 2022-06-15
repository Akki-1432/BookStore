<html>
<head>
	<title>MY CART</title>
	  <link rel="stylesheet" type="text/css" href="css/cart.css">
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

    <!-- CART ITEM DETAILS -->
    <div class="small-container cart-page">
        <table>
            <tr>
                <th>PRODUCT</th>
                <th>QUANTITY</th>
                <th>SUBTOTAL</th>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="images/books/java1.jpg">
                        <div>
                            <p>JAVA:PROGRAMMING</p>
                            <small>PRICE: $499.00</small><br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>$499.00</td>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="images/books/engineerbook.jpg">
                        <div>
                            <p>INDUSTRIAL:ENGINEERING</p>
                            <small>PRICE: $699.00</small><br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>$699.00</td>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="images/books/fruits.jpg">
                        <div>
                            <p>FRUITS:FOR KIDS</p>
                            <small>PRICE: $399.00</small><br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>$399.00</td>
            </tr>
        </table>

        <div class="total-price">
            <table>
                <tr>
                    <td>SUBTOTAL</td>
                    <td>$400.00</td>
                </tr>
                <tr>
                    <td>TAX</td>
                    <td>$30.00</td>
                </tr>
                <tr>
                    <td>TOTAL</td>
                    <td>$430.00</td>
                </tr>
            </table>    
        </div><br>
        <div class="pay-button">
        <button><a href="payment.php">PROCEED TO PAY</a></button>
        </div>
        
        <div class="continue-shop-cart">
        <button>&#8678;Continue Shopping</button>
        </div>
        <div class="update-cart-button">
        <button>&#9881;Update Cart</button>
        </div>


    </div>

    <div class="clr"></div>

    <!-- FOOTER -->
    <?php
    include"footer.php"
    ?>
</body>
</html>