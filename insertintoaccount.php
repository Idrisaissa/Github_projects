<?php 
	
    $dbHost = "localhost";
    $dbUser ="root";
	$dbPassword ="";
    $dbName = "pc";


    try{
        $dsn = "mysql:host=" . $dbHost . ";dbname=" . $dbName;
        $pdo = new PDO($dsn, $dbUser, $dbPassword);
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        echo "connection successiful";

}
catch(PDOException $e){
echo "connection field: ".$e->getmessage();

}
   if($_SERVER['REQUEST_METHOD'] =='POST'){

    $Fname = $_POST['Fname'];
    $Lname = $_POST['Lname'];
    $Password = $_POST['Password'];
    $Email = $_POST['Email'];
    $Gender = $_POST['Gender'];
     $Role = $_POST['Role'];



     $sql = "INSERT INTO account (Fname, Lname, Password, Email, Gender, Role) VALUES (:Fname, :Lname, :Password, :Email, :Gender, :Role)";
$stmt = $pdo->prepare($sql);
$stmt->execute(['Fname' => $Fname, 'Lname' => $Lname, 'Password' => $Password, 'Email' => $Email, 'Gender' => $Gender, 'Role' => $Role]);








   }    
     

         ?>