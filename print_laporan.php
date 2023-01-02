<!DOCTYPE html>
<html>
<head>
	<title>CETAK PRINT DATA</title>
</head>
<style>
      body {
        margin-top: 3rem;
      }
      h1 {
        text-align: center;
      }
      th {
        background-color: red;
        text-align: center;
        font-size: 20px;
      }
      td {
        text-align: center;
        font-size: 15px;
      }
      table {
        margin: auto;
        margin-top: 100px;
      }
    </style>
<body>

<h1>DATA LAPORAN BUKU</h1>


	<?php 
	include 'functions.php';
	?>

	<table border="2" style="width: 100%">
		<tr>
			<th width="3%">No</th>
			<th>Judul</th>
			<th>Penyusun</th>
			<th>Penerbit</th>
			<th>Tahun</th>
		</tr>
		<?php 
		$no = 1;
		$sql = mysqli_query($conn,"SELECT * FROM buku");
		while($data = mysqli_fetch_array($sql)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $data['judul']; ?></td>
			<td><?php echo $data['penyusun']; ?></td>
			<td><?php echo $data['penerbit']; ?></td>
			<td><?php echo $data['tahun']; ?></td>
		</tr>
		<?php 
		}
		?>
	</table>

	<script>
		window.print();
	</script>

</body>
</html>