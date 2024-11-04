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
    color: var(--navy);
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
    box-shadow: 35px 35px 0 10px var(--navy);
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
    box-shadow: 35px -35px 0 10px var(--navy);
    pointer-events: none;
}
.main{
    position: absolute;
    width: calc(100% - 300px);
    left: 300px;
    min-height: 100vh;
    background: var(--navy);
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
.form-box{
            width: 30%;
            border: 1px solid black;
            margin: auto;
            margin-top: 50px;
            padding: 30px;
            border-radius: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            background: transparent;
            backdrop-filter: blur(20px);
            border-top-right-radius: 10px;
            border-bottom-right-radius: 10px;
            color: navy;
        }
        .form-box h2{
            font-size: 32px;
            text-align: center;
        }
        .form-box .input-box{
            width: 340px;
            height: 50px;
            margin: 30px 0;
            border-bottom: 2px solid #e4e4e4;
            position: relative;
        }
        .input-box input{
            width: 100%;
            height: 100%;
            background: transparent;
            border: none;
            outline: none;
            font-size: 16px;
            color: navy;
            font-weight: 500;
            padding-right: 28px;
        }
        .input-box .icon{
            position: absolute;
            right: 0;
            top: 13px;
            font-size: 19px;
        }
        .input-box label{
            position: absolute;
            top: 50%;
            left: 0;
            transform: translateY(-50%);
            font-size: 16px;
            font-weight: 500;
            pointer-events: none;
            transition: .5s ease;
        }
        button{
            margin-top: 20px;
            height: 30px;
            width: 40%;
            border-radius: 10px;
            background-color: pink;
        }
        .input-box i{
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 20px;
            /* color: #fff; */
            /* pointer-events: none; */
            /* transition: .5s; */
        }
        
        .form-box .remember-forgot{
            display: flex;
            justify-content: space-between;
            font-size: 14.5px;
            margin: -15px 0 15px;
            font-weight: 500;
        }
        .remember-forgot label input{
            accent-color: navy;
            margin-right: 3px;
        }
        .remember-forgot a{
            color: navy;
            text-decoration: none;
            /* font-size: 14px; */
        }
        .remember-forgot a:hover{
            text-decoration: underline;
        }
        .btn{
            width: 100%;
            height: 45px;
            background: gold;
            border: none;
            outline: none;
            border-radius: 4px;
            box-shadow: 0 0 10px rgba(0, 0, 0, .5);
            cursor: pointer;
            font-size: 16px;
            color: navy;
            font-weight: 600;
            /* position: relative; */
        }
        .form-box .login-register{
            font-size: 14.5px;
            text-align: center;
            margin-top: 25px;
            font-weight: 500;
        }
        .login-register p a{
            color: navy;
            text-decoration: none;
            font-weight: 600;
        }
        .register-link p a:hover{
            text-decoration: underline;
        }
        .form-box .img{
            width: 100%;
        }
        .error-massage{
            color: navy;
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
    <div class="form-box">
    <form action="" method="post">
        <h2>Log in</h2>
        <div class="input-box">
            <span class="icon"><i class='bx bxs-envelope'></i></span>
            <input type="email" name="email" placeholder="Email" required>
        </div>
        <div class="input-box">
            <span class="icon"><i class='bx bxs-lock-alt'></i></span>
            <input type="password" name="password" placeholder="Password" required>
        </div>
        <div class="remember-forgot">
            <label><input type="checkbox">Remember Me</label>
            <a href="#">Forgot Password</a>
        </div>
        <button type="submit" name="submit" class="btn">Login</button>
        <div class="login-register">
            <p>Don't have an account? <a href="#" class="register-link">Sign Up</a></p>
        </div>
    
    </form>
</div>
<!-- scripts -->
<script src="assets/js/main.js"></script>
    <!-- icon -->
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>