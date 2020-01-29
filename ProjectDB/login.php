<?php

include 'koneksi.php';

    if (isset($_POST['login'])) {
    
        $nama = $_POST['username'];
        $pass = $_POST['password'];

//         if (!empty(trim($nama)) && !empty(trim($pass))) {
//         if (login_cek_nama($nama)) {
//             if (cek_data($nama,$pass)){
//                 $_SESSION['nama'] = $nama;
//                 header('Location: index.php');
//             }
//             else{
//                 echo "Data Ada Yang salah";
//             }
//         }
//         else{
//             echo "Data Ada Yang Salah !!!";
//         }
//     }   
//         else{
//          echo "Tidak Boleh Kosong";   
//         }

// }
        $queryUser = mysqli_query($koneksi, "SELECT * FROM siswa WHERE username='$user' AND password='$pass'") ;
        
        if ($queryUser) {
            header('location: index.php');
        }
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head> 
    <title>Login | User</title>
    <link rel="icon" href="user.png">
    <style>
    
        *{
            font-family: sans-serif;
            margin: 0%;
            padding: 0%;
        }
 
        body{
            background-color: pink;
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
        
        .kontener{

            margin-left: 400px;
            width: 550px;
            height: 550px;
            background-color: rgb(138, 98, 134);
        }

        .kontener img{
            background-color: white;
            border-radius: 50px;
        }
        
        label{
            font-family: century gothic;
            font-size: 25px;
            color: white;
            padding-left: 75px;
            padding-right: 20px;
        }

        .submit:hover{
            background-color: green;
        }

        input{
            font-size: 20px;
            padding: 5px;
        }

        .username{
            padding-left: 65px;
        }

    </style>
</head>
<body>

    <div class="header">
        <br>
        <center><h1>Login</h1></center><br><hr><hr>
        <center><ul>
        <li><a href="registrasi.php">Registrasi</a></li>
        <li><a href="Login.php">Login</a></li>
        <li><a href="tentangku/aldo.html">Tentangku</a></li>
        </ul></center>
    </div>
    
    <div class="kontener">
        <br><br><br><br>
        <center><img src="user.png" width="100px" height="100px"></center><br><br><br>
    <form action="login.php" method="POST">
        <Label class="username" for="username">Username</Label>
        <input type="text" name="username"><br><br><br>
        <label for="password">Password</label>
        <input type="password" name="password">
        <center><br><br><input class="submit" type="submit" value="Login" name="login"></center>
    </form>
    </div>
</body>
</html>



<?php 




 ?>