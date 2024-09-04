<?php
   $con=mysqli_connect('localhost','id21713414_purebasket','id21713414_grocery');

   $Email = $_POST['email'];
   $Password = $_POST['password'];

  $sql = "Insert Into login (Email,Password) VALUES ('$Email','$Password')";
$query = mysqli_query($con,$sql);
if($query==true){
echo "<script>alert('Enquiry Submitted Successfully.');window.location.href='index.html';</script>";
}
?>
