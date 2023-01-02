<?php
     //koneksi ke db
  $conn = mysqli_connect("localhost", "root", "", "perpus");

  function query($query) {
      global $conn;
      $result = mysqli_query($conn, $query);
      $rows = [];
      while ($row = mysqli_fetch_assoc($result)) {
          $rows[] = $row;

      }
      return $rows;
  }

//   Tambah data Buku
function tambah($data){
    global $conn;

    $jdl =  htmlspecialchars($data["judul"]);
    $susun = htmlspecialchars($data["penyusun"]);
    $terbit = htmlspecialchars($data["penerbit"]);
    $thn = htmlspecialchars($data["tahun"]);


    $query = "INSERT INTO buku VALUES ('','$jdl','$susun','$terbit','$thn')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
//   Tambah data anggota
    function tambah2($data){
        global $conn;

        $nama =  htmlspecialchars($data["nama"]);
        $email = htmlspecialchars($data["email"]);
        $nohp = htmlspecialchars($data["no_hp"]);
        $almt = htmlspecialchars($data["alamat"]);


        $query = "INSERT INTO anggota VALUES ('','$nama','$email','$nohp','$almt')";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

//Hapus data buku
    function hapus($id) {
        global $conn;
        mysqli_query($conn, "DELETE FROM buku WHERE ID = $id");

        return mysqli_affected_rows($conn);
    }

    //Hapus data anggota
    function hapus2($id) {
        global $conn;
        mysqli_query($conn, "DELETE FROM anggota WHERE ID = $id");

        return mysqli_affected_rows($conn);
    }


//update data buku
    function update($data) {
        global $conn;

        $id = $data["ID"];
        $jdl =  htmlspecialchars($data["judul"]);
        $susun = htmlspecialchars($data["penyusun"]);
        $terbit = htmlspecialchars($data["penerbit"]);
        $thn = htmlspecialchars($data["tahun"]);
    
    
        $query = "UPDATE buku SET 
                    judul = '$jdl',
                    penyusun = '$susun',
                    penerbit = '$terbit',
                    tahun = $thn
                    WHERE ID = $id
                ";
    
        mysqli_query($conn, $query);
    
        return mysqli_affected_rows($conn);
    }

    //update data anggota
    function update2($data) {
        global $conn;

        $id = $data["ID"];
        $nama =  htmlspecialchars($data["nama"]);
        $email = htmlspecialchars($data["email"]);
        $nohp = htmlspecialchars($data["no_hp"]);
        $almt = htmlspecialchars($data["alamat"]);
    
    
        $query = "UPDATE anggota SET 
                    nama = '$nama',
                    email = '$email',
                    no_hp = '$nohp',
                    alamat = '$almt'
                    WHERE ID = $id
                ";
    
        mysqli_query($conn, $query);
    
        return mysqli_affected_rows($conn);
    }

    //cari data buku
    function cari($keyword) {
        $query = "SELECT * FROM buku WHERE ID LIKE '%$keyword%'
        OR judul LIKE '%$keyword%' 
        OR penyusun LIKE '%$keyword%' 
        OR penerbit LIKE '%$keyword%'
        OR tahun LIKE '%$keyword%'
        
        ";

        return query($query);
    }

    //cari data anggota
    function cari2($keyword) {
        $query = "SELECT * FROM anggota WHERE ID LIKE '%$keyword%'
        OR nama LIKE '%$keyword%' 
         ";

        return query($query);
    }

    //registrasi user
    function register($data) {
		global $conn;

		$username = strtolower(stripcslashes($data["username"]));
		$password = mysqli_real_escape_string($conn, $data["password"]);
		$password2 = mysqli_real_escape_string($conn, $data["password2"]);
        

        //cek username sudah dipakai
        $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

        if(mysqli_fetch_assoc($result)) {
            echo "<script>
                alert ('Username Sudah Terdaftar');
            </script>";

            return false;
        }
        //cek konfimasi password
        if($password !== $password2 ) {
            echo "
            <script>
            alert('Konfirmasi Password tidak sesuai');
            </script>
            ";
            return false;
        }
        //enkripsi password
        $password = password_hash($password, PASSWORD_DEFAULT);

        //tambhakan user baru ke database
        mysqli_query($conn, "INSERT INTO user VALUES ('','$username','$password')");

        return mysqli_affected_rows($conn);
    }
?>