<?php 
include 'config.php';

$id_mahasiswa = $_POST['id_mahasiswa'];
$nama_mahasiswa = $_POST['nama_mahasiswa'];
$nrp = $_POST['nrp'];
$prodi = $_POST['prodi'];
$email = $_POST['email'];

$filename = $_FILES['gambar']['name'];

if($filename != ''){
	$rand = rand();
	$ekstensi =  array('png','jpg','jpeg','gif');
	$filename = $_FILES['gambar']['name'];
	$ukuran = $_FILES['gambar']['size'];
	$ext = pathinfo($filename, PATHINFO_EXTENSION);

	if(!in_array($ext,$ekstensi) ) {
		header("location:data_mahasiswa.php?alert=gagal_ekstensi");
	}else{
		if($ukuran < 1044070){		
			$xx = $rand.'_'.$filename;
			move_uploaded_file($_FILES['gambar']['tmp_name'], 'image/'.$rand.'_'.$filename);
			mysqli_query($mysqli, "UPDATE mahasiswa SET nama_mahasiswa='$nama_mahasiswa', nrp='$nrp', prodi='$prodi', email='$email', gambar='$xx' WHERE id_mahasiswa='$id_mahasiswa' ");
			header("location:data_mahasiswa.php?alert=berhasil");
		}else{
			header("location:data_mahasiswa.php?alert=gagal_ukuran");
		}
	}
} else{
	mysqli_query($mysqli, "UPDATE mahasiswa SET nama_mahasiswa='$nama_mahasiswa', nrp='$nrp', prodi='$prodi', email='$email' WHERE id_mahasiswa='$id_mahasiswa' ");
	header("location:data_mahasiswa.php?alert=berhasil");
}