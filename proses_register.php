<?php
if($_POST){
    $Nik=$_POST['Nik'];
    $Nama=$_POST['Nama'];
    $Alamat=$_POST['Alamat'];
    $Gender=$_POST['Gender'];
    $No_tlp=$_POST['No_tlp'];
    $password=$_POST['password'];
    $username=$_POST['username'];
    $id_jabatan=$_POST['id_jabatan'];
    if(empty($Nik)){
        echo "<script>alert('NIk siswa tidak boleh kosong');location.href='register.php';</script>";


    } elseif(empty($Nama)){
        echo "<script>alert('Nama tidak boleh kosong');location.href='tambah_siswa.php';</script>";
    } elseif(empty($password)){
        echo "<script>alert('password tidak boleh kosong');location.href='tambah_siswa.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into siswa (Nik, Alamat, Gender, No_tlp, Nama, password, username, id_jabatan)
 value ('".$NIk."','".$Alamat."','".$Gender."','".$No_tlp."','".$Nama."','".$username."','".md5($password)."','".$id_jabatan."')") or die(mysqli_error($conn));       
  if($insert){
            echo "<script>alert('Sukses registrasi');location.href='register.php';</script>";
        } else {
            echo "<script>alert('Gagal regitrasi');location.href='register.php';</script>";
        }
    }
}
?>