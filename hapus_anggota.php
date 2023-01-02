<?php 
session_start();

if( !isset($_SESSION["login"]) ){
  header('location: login.php');
  exit;
}
	require 'functions.php';

	$id = $_GET["ID"];

	if( hapus2($id) > 0 ) {
		echo "<script>
                    alert('Data Berhasil Di Hapus...!');
					document.location = 'anggota.php';
           </script>";
       } else {
        echo "<script>
        alert('Data Gagal Di Hapus...!');
		document.location = 'anggota.php';
		</script>";
	   }

?>