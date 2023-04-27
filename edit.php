<?php

    $servername = "localhost";
        $username = "root";
        $password = "";

        try{
            $conn = new PDO("mysql:host=localhost;dbname=my", "root", "");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            
            $name = $_POST['name'];
			$offNum = $_POST["offNum"];
            $floor = $_POST["floor"] ;
            $round = $_POST["round"];
            $maintNum = $_POST["maintNum"];
			$dep=$_POST["dep"];


            $stmn = $conn->prepare("update office set name='$name', offNum='$offNum', floor='$floor', round='$round',dep=$dep , where maintNum = '$maintNum';");
            $stmn->execute();
            header("refresh:0;url=showData.php");

        }catch(PDOEXCEPTION $e){
        echo "Connection Failed" , $e->getMessage();
    }

?>