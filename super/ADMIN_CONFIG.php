<?php 
$host = "localhost";
$user = "root";
$pass = "";
$name = "id15442615_poliklinikdb";


$con = mysqli_connect($host,$user,$pass,$name) or die(mysqli_error());

function uniq_email($value){
    global $con;
    $query= "SELECT * FROM pekerja_klinik WHERE email_klinik='$value'";
    if($result = mysqli_query($con,$query)){
        if(mysqli_num_rows($result)==0 ) {
            return true;
        }
        else {
            return false;
        }
    }
}

function insert($query){
 global $con;
 mysqli_query($con,$query);
 echo mysqli_error($con);
 return mysqli_affected_rows($con);
}

function PassAlert() {
echo "<div class='alert alert-danger my-20' role='alert'>
          Password dan Confirm Password Anda tidak cocok!
        </div>
      ";
}

function Works() {
    echo "<div class='alert alert-success' role='alert'>
  Berhasil Membuat Akun!
</div>";
}

function DupEmail() {
    echo "<div class='alert alert-danger' role='alert'>
  email sudah terdaftar sebelumnya! coba email lain...
</div>";
}

?>

