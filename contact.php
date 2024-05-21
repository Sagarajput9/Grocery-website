<?php
   $con=mysqli_connect('localhost','id21713414_purebasket','Sagar@22','id21713414_grocery');

   $First_name = $_POST['first'];
   $Last_name = $_POST['last'];
   $Email = $_POST['email'];
   $Phone = $_POST['number'];
   $Message = $_POST['message'];

  $sql = "Insert Into Contact (First_name,Last_name,Email,Phone,Message) VALUES ('$First_name','$Last_name','$Email','$Phone','$Message')";
$query = mysqli_query($con,$sql);
if($query==true){
echo "<script>alert('Enquiry Submitted Successfully.');window.location.href='index.html';</script>";
}
?>