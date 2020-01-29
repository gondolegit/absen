<!DOCTYPE html>
<html>
<head>
	<title>MENAMPILKAN DATA DARI DATABASE SESUAI TANGGAL DENGAN PHP - WWW.MALASNGODING.COM</title>
</head>
<body>

	<center>

		<h2>MENAMPILKAN DATA DARI DATABASE SESUAI TANGGAL DENGAN PHP<br/><a href="https://www.malasngoding.com">WWW.MALASNGODING.COM</a></h2>
<form method="get">
			<label>PILIH TANGGAL</label>
			<input type="date" name="tanggal">
			<input type="submit" value="FILTER">
		</form>

		<?php 
		include 'koneksi.php';
		?>

		<br/><br/><br/>

		

		<br/> <br/>

		<table border="1">
			<tr>
				<th>No</th>
				<th>Tanggal</th>
				<th>Nama Barang</th>
				<th>Jumlah</th>
			</tr>
			<?php 
			$no = 1;

			if(isset($_GET['tanggal'])){
				$tgl = $_GET['tanggal'];
				$sql = mysqli_query($koneksi,"select * from barang_masuk where tanggal='$tgl'");
			}else{
				$sql = mysqli_query($koneksi,"select * from barang_masuk");
			}
			
			while($data = mysqli_fetch_array($sql)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $data['tanggal']; ?></td>
				<td><?php echo $data['nama']; ?></td>
				<td><?php echo $data['jumlah']; ?></td>
			</tr>
			<?php 
			}
			?>
		</table>

	</center>
</body>
</html>



<div class="isi">
        
        <?php 

            $hasil = mysqli_query($koneksi, "SELECT * FROM absensi");
         ?>
         <table border="">
             <tr>
                 <th>No</th>
                 <th>Nama</th>
                 <th>Tanggal</th>
                 <th>Keterangan</th>
                 <th  colspan="2">Setting</th>
             </tr>
            <?php while ($row = mysqli_fetch_array($hasil)) {?>
             <tr>
                 <td><?= $row['id']?></td>
                 <td><?= $row['nama'] ?></td>
                 <td><?= $row['tanggal'] ?></td>
                 <td><?= $row['keterangan'] ?></td>
                 <td><a href="edit.php?id=<?= //$row['id']; ?>">edit</a></td>
                 <td><a href="hapus.php?id=<?= //$row['id']; ?>">hapus</a></td>
             </tr>
            <?php } ?>
         </table>
    </div>