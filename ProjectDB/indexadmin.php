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
        <center><h1>Control Admin</h1></center><br><hr><hr>
        <center><ul>
        <li><a href="indexadmin.php">Home</a></li>
        <li><a href="Admin.php">Logout</a></li>
        </ul></center>
    </div>

    <form method="get">
            <label>PILIH TANGGAL</label>
            <input type="date" name="tanggal">
            <input type="submit" value="FILTER">
        </form>

    <table border="">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Tanggal</th>
            <th>Keterangan</th>
            <th  colspan="2">Setting</th>
        </tr>

<?php 
            $no = 1;

            if(isset($_GET['tanggal'])){
                $tgl = $_GET['tanggal'];
                $sql = mysqli_query($koneksi,"SELECT * FROM absensi WHERE tanggal LIKE '$tgl%'");
            }else{
                $sql = mysqli_query($koneksi,"SELECT * FROM absensi");
            }
            
            while($row = mysqli_fetch_array($sql)){
            ?>
              <tr>
                 <td><?= $row['id']?></td>
                 <td><?= $row['nama'] ?></td>
                 <td><?= $row['tanggal'] ?></td>
                 <td><?= $row['keterangan'] ?></td>

                 <td><a href="edit.php?id=<?= $row['id']; ?>">edit</a></td>
                 <td><a href="hapus.php?id=<?= $row['id']; ?>">hapus</a></td>
             </tr>
            <?php 
            }
            ?>


    
        


</body>
</html>
