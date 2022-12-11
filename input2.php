<?php 
$con= mysqli_connect("localhost", "root", "", "ahmadleoaes");

if (isset($_POST["simpan"])):
global $con;
$kmk= filter_var($_POST["kmk"],FILTER_SANITIZE_STRING);
$mk= filter_var($_POST["mk"],FILTER_SANITIZE_STRING);
$dp= filter_var($_POST["dp"],FILTER_SANITIZE_STRING);
$key="JANGANCOPAS";
$query="INSERT INTO matakuliah VALUES('',aes_encrypt('$kmk', '$key'), aes_encrypt('$mk','$key'), aes_encrypt('$dp','$key') ) ";
$ex=mysqli_query($con, $query);
if ($ex>0):
echo "<script>
alert('record berhasil ditambah');
 document.location.href='input.php'; 

 </script>";
else:
echo "<script>
alert('record gagal ditambah');
 document.location.href='input.php'; 

 </script>";
    endif;
else:
echo "<script> document.location.href='input.php'; </script>";
endif;


 ?>