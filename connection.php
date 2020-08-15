<?php 
try{
$conn=new PDO('mysql:host=localhost;dbname=mydb','root','');

$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch(PDOException){
echo "there is an error";


}

 ?>