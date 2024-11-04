<?php
session_start();
if(!empty($_SESSION['email'])){
    header('location:3readpab.php');
    exit();
}

$akun = [
    [
        "email"=>"amelia@gmail.com",
        "password"=>"amel123"
    ],
];

$kondisi = 0; 
if(isset($_POST['submit'])){
    $kondisi = 1;
    foreach ($akun as $akn){
        if($akn['email']==$_POST['email']&&$akn['password']==$_POST['password']){
            header('location:3readpab.php');
            
            $_SESSION['email']=$akn['email'];
        }else{
            $kondisi = 2;
        }
    } 
}
?>

<?php if($kondisi==2) { ?>
        <script>alert("Username/Password is Incorrect!")</script>
    <?php } ?>