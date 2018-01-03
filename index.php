<?php
	//include class controller
	include "controller/controller.php";
	//variabel main merupakan objek baru yg dibuat dari class controller
	$main= new controller();
	//kondisi untuk menampilkan halaman web yg diminta
	if(isset($_GET['e'])){ //kondisi untuk mengakses halaman web
		$nim= $_GET['e'];
		$main->viewEdit($nim);
	} else if(isset($_GET['d'])){ //kondisi untuk menghapus data
		$nim= $_GET['d'];
		$main->delete($nim);
	} else if(isset($_GET['i'])){
		$main->viewInsert(); //kondisi utk mengakses halaman tambah data
	} else {
		$main->index(); //halaman awal (menampilkan seluruh data)
	}
?>