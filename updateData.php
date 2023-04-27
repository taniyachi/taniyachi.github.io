<?php

    $servername = "localhost";
    $username = "root";
    $password = "";

    try{
        $conn = new PDO("mysql:host=localhost;dbname=my", "root", "");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        session_start();
        $name = $_GET['name'];
        $offNum =$_GET["offNum"];
        $floor = $_GET["floor"] ;
        $round = $_GET["round"];
        $maintNum =$_GET["maintNum"];
        $dep =$_GET["dep"];

    }catch(PDOEXCEPTION $e){
        echo "Connection Failed" , $e->getMessage();
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>

    <style>
        body {
        }
    </style>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="jquery-3.4.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>
<body>
    <center>
        <form action="edit.php" method="post" class="was-validated">

            <div class="w-50 p-3">
            <label>رقم المكتب </label>
                <input type="text" class="form-control" name="name" size="30" maxlength="500" value="<?php echo $name ?>" required="true">
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>

            <div class="w-50 p-3">
            <label>الدور</label>
                <input type="text" class="form-control" name="offNum" size="30" maxlength="225" value="<?php echo $offNum ?>" required="true">
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>

            <div class="w-50 p-3">
            
            <label>الدوار</label>
                <input type="text" class="form-control" name="floor" size="30" maxlength="225" value="<?php echo $floor?>" required="true">
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>

            <div class="w-50 p-3">
            <label>رقم الصيانة</label>
                <input type="text" class="form-control" name="round" size="30" maxlength="225" value="<?php echo $round ?>" required="true">
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>

            <div class="w-50 p-3">
                <label>الاسم</label>
                <input type="text" class="form-control" name="maintNum" size="30" maxlength="225" value="<?php echo $maintNum ?>" required="true">
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="w-50 p-3">
                <label>القسم </label>
                <input type="text" class="form-control" name="dep" size="30" maxlength="225" value="<?php echo $dep ?>" required="true">
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>

            <button type="submit" class="btn btn-light">تحديث </button>
            <button type="reset" class="btn btn-light">استعادة</button> 

        </form>
    </center>

</body>
</html>