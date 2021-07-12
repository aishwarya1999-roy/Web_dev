<html>


<center>
  <img src= "tick.png" height="100px" width="100px"/>
  <H1> Thank You for Submiting </H1></center>

<pre>
<?php
$data_file=fopen("example.txt", "w");

    $First_Name =$_POST["firstname"];
    $Middle_Name =$_POST["middlename"];
    $Last_Name =$_POST["lastname"];
    $Gender =$_POST["gender"];
    $country_code =$_POST["country_code"];
    $Phone_Number =$_POST["phone"];
    $Email_Id =$_POST["email"];
    $Password =$_POST["psw"];

$text_to_write= "First_Name : ". $First_Name."\n"."Middle_Name : ".$Middle_Name."\n"."Last_Name : ".$Last_Name."\n"."Gender : ".$Gender."\n"."country_code : ".$country_code."\n".
"Phone_Number : ".$Phone_Number."\n"."Email_Id : ".$Email_Id."\n"."Password: ". $Password;


fwrite($data_file,$text_to_write);
fclose($data_file);
?>


</pre>

</html>
