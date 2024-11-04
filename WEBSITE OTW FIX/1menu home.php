<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <div class="container">
        <div class="header">
                <div class="navv">
                    <a href="">MENU</a>
                </div>
                <img src="./copy_logo-removebg-preview.png" width="150px">
                <h1>
                    Cozy Like Your Home
                </h1>
            </div>
        </div> 
        <div class="main">
            <div class="booking-form">
                <form action="submit_booking.php" method="POST">
                    <div class="form-group">
                        <label for="checkin">Check-in:</label>
                        <input type="date" id="checkin" name="checkin" required>
                    </div>
                    <div class="form-group">
                        <label for="checkout">Check-out:</label>
                        <input type="date" id="checkout" name="checkout" required>
                    </div>
                    <div class="form-group">
                        <label for="adults">Adults:</label>
                        <input type="number" id="adults" name="adults" min="1" required>
                    </div>
                    <div class="form-group">
                        <label for="children">Children:</label>
                        <input type="number" id="children" name="children" min="0">
                    </div>
                    <div class="form-group">
                        <label for="room-type">Room Type:</label>
                        <select id="room-type" name="room-type" required>
                            <option value="">Choose Room Type</option>
                            <option value="standard">Standard</option>
                            <option value="deluxe">Deluxe</option>
                            <option value="suite">Family</option>
                        </select>
                    </div>
                    <button type="submit">Book</button>
                </form>
            </div>
            <div class="categori">
                <div class="boxx">
                    <img src="./ak.png" alt="Standard Room" class="room-image">
                    <h3>Standard Room</h3>
                    <p>Comfortable single room for solo travelers.</p>
                </div>
                <div class="boxxx">
                    <img src="./ak.png" alt="Deluxe Room" class="room-image">
                    <h3>Deluxe Room</h3>
                    <p>Spacious double room perfect for couples.</p>
                </div>
                <div class="boxxxx">
                    <img src="./ak.png" alt="Suite Room" class="room-image">
                    <h3>Family Suite</h3>
                    <p>Ideal for families with a living area and multiple beds.</p>
                </div>
            </div>
            <div class="review-list">
                <h3>Previous Reviews</h3>
                <div class="review-item">
                    <img src="./pngegg (1).png" alt="Killua" class="reviewer-image">
                    <div>
                        <strong>Killua Zoldyck:</strong>
                        <p>Great place to stay! Very cozy and comfortable.</p>
                    </div>
                </div>
                <div class="review-item">
                    <img src="./pngegg (6).png" alt="Zoro" class="reviewer-image">
                    <div>
                        <strong>Roronoa Zoro:</strong>
                        <p>I loved the deluxe room! Will definitely come back.</p>
                    </div>
                </div>
                <div class="review-item">
                    <img src="./Kento_Nanami_29.webp" alt="Nanami" class="reviewer-image">
                    <div>
                        <strong>Kento Nanami:</strong>
                        <p>I spent four days with this host and was delighted. A very hospitable family, and great food.</p>
                    </div>
                </div>
                <!-- Tambahkan review lainnya di sini -->
            </div>
            <div class="imagebg">
                <!-- <img src="./BUKIT MADO.jpg" alt="imagesliderdestinations" width="1260px"> -->
            </div>
            <div class="categori2">
                <div class="boxa">
                    <img src="./ak.png" alt="Breakfast" class="menu-image">
                    <h3>Breakfast Menu</h3>
                    <p>Comfortable single room for solo travelers.</p>
                </div>
                <div class="boxb">
                    <img src="./ak.png" alt="All-Day Menu" class="menu-image">
                    <h3>All-Day Menu</h3>
                    <p>Spacious double room perfect for couples.</p>
                </div>
                <div class="boxc">
                    <img src="./ak.png" alt="Drinks" class="menu-image">
                    <h3>Drink Menu</h3>
                    <p>Ideal for families with a living area and multiple beds.</p>
                </div>
            </div>
        </div>
    <div class="footer">
        <div class="container1">
            <h5>
                 ABOUT
            </h5>
            <h5>
                CONTACT
            </h5>
            <h5>
                TERMS & CONDITIONS
            </h5>
            <h5>
                PRIVACY POLICY
            </h5>
            <h5>
                CANCELLATION POLICY
            </h5>
            <h5>
                SITEMAP
            </h5>
        </div>
        <div class="container2">
            <div class="box1">
                <h3>
                    FOLLOW US
                </h3>
                <img src="./logo-facebookpng-32247.png" width="30px">
                <img src="./logo-ig-png-32453.png" width="30px">
                <div class="clear"></div>
                <h6>
                    Copyright &copy;2024 All rights reserved
                </h6>
                <h6>
                    This template is made by Rizki Amalia
                </h6>
            </div>
            <div class="box2">
                <img src="./copy_logo-removebg-preview.png" alt="logo" width="150px">
            </div>
            <div class="box3">
                <h3>
                    CONNECT WITH US
                </h3>
                <br>
                <h6>
                    PENGINAPAN AMELIA
                </h6>
                <h6>
                    JL. POROS PANGKAJENE-PAREPARE, BOTTOE
                </h6>
                <br>
                <h6>
                    LOCAL: 0411-586216
                </h6>
            </div>
        </div>
    </div>
    </div>
</body>
</html>