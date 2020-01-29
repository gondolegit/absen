<?php 

include 'koneksi.php';

 ?>

<!DOCTYPE html>
<html lang="en">
<head> 
    <title>Control Admin</title>
    <link rel="icon" href="home1.png">
    <style>
    
        *{
            font-family: sans-serif;
            margin: 0%;
            padding: 0%;
        }
 
        body{
            background-color: pink;
        }

        p{
            color: white;
        }

        .main h1{
            color: white;
        }

        ul {
        list-style-type: none;
        margin: 0;
        padding-left: 525px;
        overflow: hidden;
        background-color: grey;
        }

        li {
        float: left;
        }

        li a {
        display: block;
        color: black;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        }

        /* Change the link color to #111 (black) on hover */
        li a:hover {
        background-color: white;
        }
        
        .main{
            width: 600px;
            height: 550px;
            background-color: rgb(138, 98, 134);
            margin-left:360px;
        }

        img{
            border-radius: 50px;
            background-color: white;
        }

        .form{

            color: white;
            font-family: sans-serif;;
            width: 370px;
            height: 400px;
            background-color: brown;
            margin-left: 50px;
            font-size: 20px;
            padding-top: 30px;
            padding-left: 130px;   
            

        }

        .form{
            padding-bottom: 20px;
        }


    </style>
</head>
<body>

    <div class="header">
        <br>
        <center><h1>Profil Pengguna</h1></center><br><hr><hr>
        <ul>
            <li><a href="beranda.php">Home</a></li>
            <li><a href="Login.php">Logout</a></li>
            <li><a href="profil.php">Profil</a></li>
        </ul>
    </div>