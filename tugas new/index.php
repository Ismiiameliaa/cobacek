<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Admin Dashboard</title>
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap');

*{
    font-family: "Ubuntu", sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

:root{
    --blue: #2a2185;
    --white: #fff;
    --gray: #f5f5f5;
    --black1: #222;
    --black2: #999;
}

body{
    min-height: 100vh;
    overflow-x: hidden;
}

.container{
    position: relative;
    width: 100%;
}

.navigation{
    position: fixed;
    width: 300px;
    height: 100%;
    background: var(--blue);
    border-left: 10px solid var(--blue);
    transition: 0.5s;
    overflow: hidden;
}

.navigation.active{
    width: 80px;
}

.navigation ul{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
}

.navigation ul li{
    position: relative;
    width: 100%;
    list-style: none;
    border-top-left-radius: 30px;
    border-bottom-left-radius: 30px;
}

.navigation ul li:hover, .navigation ul li.hovered{
    background-color: var(--white);
}

.navigation ul li:nth-child(1){
    margin-bottom: 40px;
}

.navigation ul li a{
    position: relative;
    display: block;
    width: 100%;
    display: flex;
    text-decoration: none;
    color: var(--white);
}

.navigation ul li:hover a, .navigation ul li.hovered a{
    color: var(--blue);
}

.navigation ul li a .icon{
    position: relative;
    display: block;
    min-width: 60px;
    height: 60px;
    line-height: 75px;
    text-align: center;
}

.navigation ul li a .icon ion-icon{
    font-size: 1.75rem;
}

.navigation ul li a .title{
    position: relative;
    display: block;
    padding: 0 10px;
    height: 60px;
    line-height: 60px;
    text-align: start;
    white-space: nowrap;
}

.navigation ul li:hover a::before, .navigation ul li.hovered a::before{
    content: '';
    position: absolute;
    right: 0;
    top: -50px;
    width: 50px;
    height: 50px;
    background-color: transparent;
    border-radius: 50%;
    box-shadow: 35px 35px 0 10px var(--white);
    pointer-events: none;
}

.navigation ul li:hover a::after, .navigation ul li.hovered a::after{
    content: '';
    position: absolute;
    right: 0;
    bottom: -50px;
    width: 50px;
    height: 50px;
    background-color: transparent;
    border-radius: 50%;
    box-shadow: 35px -35px 0 10px var(--white);
    pointer-events: none;
}
.main{
    position: absolute;
    width: calc(100% - 300px);
    left: 300px;
    min-height: 100vh;
    background: var(--white);
    transition: 0.5s;
}
.main.active{
    width: calc(100%-80px);
    left: 80px;
}

.topbar{
    width: 100%;
    height: 60px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 10px;
}
.toggle{
    position: relative;
    top: 0;
    height: 60px;
    width: 60px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 2.5rem;
    cursor: pointer;
}
.search{
    position: relative;
    width: 400px;
    margin: 0 10px;
}
.search label{
    position: relative;
    width: 100%;
}
.search label input{
    width: 100%;
    height: 40px;
    border-radius: 40px;
    padding: 5px 20px;
    outline: none;
    border: 1px solid var(--black2);
    margin-left: 250px;
}
.search label ion-icon{
    position: absolute;
    top: 0;
    left: 10px;
    font-size: 1.2rem;
    margin-left: 600px;
}
.user{
    position: relative;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    overflow: hidden;
    cursor: pointer;
}
.user img{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.cardBox{
    position: relative;
    width: 100%;
    padding: 20px;
    /* display: grid;
    grid-column: repeat(4, 1fr);
    column-gap: 50px; */
}
.cardBox .card{
    position: relative;
    background: var(--white);
    padding: 30px;
    border-radius: 20px;
    display: flex;
    justify-content: space-between;
    cursor: pointer;
    box-shadow: 0 7px 25px rgba(0, 0, 0, 0.08);
}
.cardBox .card .numbers{
    position: relative;
    font-weight: 500;
    font-size: 2.5rem;
    color: var(--blue);
}
.cardBox .card .cardName{
    color: var(--black2);
    font-size: 1.1rem;
    margin-top: 5px;
}
.cardBox .card .iconBox{
    font-size: 3.5rem;
    color: var(--black2);
}
.cardBox .card:hover{
    background: var(--blue);
}
.cardBox .card:hover .numbers, .cardBox .card:hover .cardName, .cardBox .card:hover .iconBox {
    color: var(--white);
}
    </style>
</head>
<body>
    <!-- navigasi -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                        <span class="title">Penginapan Amelia</span>
                    </a>
                </li>
                <li>
                    <a href="1loginpab.php">
                        <span class="icon"><ion-icon name="log-in-outline"></ion-icon></span>
                        <span class="title">Login</span>
                        
                    </a>
                </li>
                <!-- <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="bed-outline"></ion-icon></span>
                        <span class="title"><link rel="stylesheet" href="">Rooms</span>
                    </a>
                </li> -->
                <!-- <li>
                    <a href="3readpab.php">
                        <span class="icon"><ion-icon name="people-outline"></ion-icon></span>
                        <span class="title">Guests</span>
                    </a>
                </li> -->
                <!-- <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="cash-outline"></ion-icon></span>
                        <span class="title">Payments</span>
                    </a>
                </li> -->
                <!-- <li>
                    <a href="6logoutpab.php">
                        <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
                        <span class="title">Logout</span>
                    </a>
                </li> -->
            </ul>
        </div>
    </div>
    <!-- =====MAIN===== -->
     <div class="main">
        <div class="topbar">
            <div class="toggle">
                <ion-icon name="menu-outline"></ion-icon>
            </div>
            <div class="search">
                <label>
                <ion-icon name="search-outline"></ion-icon>
                <input type="text" placeholder="Search Here">
                </label>
            </div>
            <div class="user">
                <img src="./pngegg (3).png" alt="">
            </div>
        </div>
        <div class="cardBox">
            <div class="card">
                <div>
                    <div class="numbers">1,003</div>
                    <div class="cardName">Daily View</div>
                </div>
                <div class="iconBox">
                    <ion-icon name="eye-outline"></ion-icon>
                </div>
                <div>
                    <div class="numbers">1,003</div>
                    <div class="cardName">Comments</div>
                </div>
                <div class="iconBox">
                    <ion-icon name="chatbubble-outline"></ion-icon>
                </div>
                <div>
                    <div class="numbers">1,003</div>
                    <div class="cardName">Earning</div>
                </div>
                <div class="iconBox">
                    <ion-icon name="wallet-outline"></ion-icon>
                </div>
            </div>
        </div>
        <div class="details">
            <div class="recentOrders">
                <div class="cardHeader">
                    <h2>Recent Guests</h2>
                    <a href="#" class="btn">View All</a>
                </div>
                <table>
                    <th>
                        <tr>
                            <td>Name</td>
                            <td>Rooms</td>
                            <td>Payments</td>
                            <td>Status</td>
                        </tr>
                    </th>
                    <th>
                        <tr>
                            <td>Rizki Amalia</td>
                            <td>Standard1</td>
                            <td>Paid</td>
                            <td><span class="status cash">Cash</span></td>
                        </tr>
                        <tr>
                            <td>Aulia</td>
                            <td>Deluxe3</td>
                            <td>Paid</td>
                            <td><span class="status qris">QRIS</span></td>
                        </tr>
                        <tr>
                            <td>Aunia</td>
                            <td>Family5</td>
                            <td>Paid</td>
                            <td><span class="status credit">Credit Card</span></td>
                        </tr>
                        <tr>
                            <td>Muawana</td>
                            <td>Standard7</td>
                            <td>Paid</td>
                            <td><span class="status debit">Debit Card</span></td>
                        </tr>
                    </th>
                </table>
            </div>
        </div>
     </div>
<!-- scripts -->
<script src="assets/js/main.js"></script>
    <!-- icon -->
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>