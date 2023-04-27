<!DOCTYPE HTML>
<html>

<head>

	<title>Imam Guide location</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="main.css" />
	<link href="https://fonts.googleapis.com/css2?family=Amiri&display=swap" rel="stylesheet">
	<link rel="icon" type="image/x-icon" href="logo.png">

</head>

<body class="landing is-preload">
	<div id="page-wrapper">

		<!-- Header -->
		<header id="header" class="alt">
			<h1><a href="c.php">دليل مكاتب </a> جامعة الامام محمد بن سعود الاسلامية</h1>
			<nav id="nav">
				<ul>
					<li><a href="c.php">الصفحة الرئيسية</a></li>
					<li>
						<a href="#" class="icon solid fa-angle-down">الخرائط</a>
						<ul>
						<li><a href="map1.php">خريطة مكاتب الدور الاول</a></li>
									<li><a href="map2.php">خريطة مكاتب الدورالثاني</a></li>
									<li><a href="map3.php">خريطة مكاتب الدورالثالث</a></li>
                                    <li><a href="map4.php">خريطة مكاتب الدورالرابع</a></li>
						</ul>
					</li>
					
				</ul>
			</nav>
		</header>

		<!-- Banner -->
		<section id="banner">
			<h2>دليل</h2>
			<p>مكاتب جامعة الامام محمد بن سعود الاسلامية</p>
			<ul class="actions special">
			</ul>
			<form method="post">
			<ul  class="actions special">
                   
				   <input type="submit" name="submit" >
<input style=" margin: center; width: 40%; padding:4px; position: center; color: black; " type="text" name="search" placeholder="اسم الاستاذة- اسم المكتب"></li>
                                     
                </form> </ul>  
				</section>
				<section>
				<?php

$con = new PDO("mysql:host=localhost;dbname=my",'root','');
if (isset($_POST["submit"])) {
    $str = $_POST["search"];
	$sth = $con->prepare("SELECT * FROM `office` WHERE Name = '$str'");

    $sth->setFetchMode(PDO::FETCH_OBJ);
    $sth-> execute();
    if ($row = $sth->fetch())
    {
        echo "<br/>";
        echo "<table class='table table-hover'>";
        echo "<thread>
            <tr>
                <th scope='col'> الاسم </th>
                <th scope='col'>رقم المكتب</th>
                <th scope='col'>الدور</th>
                <th scope='col'>الدوار</th>
                <th scope='col'>رقم الصيانة</th>
				<th scope='col'>القسم</th>
				<th scope='col'>Delete</th>
                <th scope='col'>Edit</th>
		</tr>
        </thread>";
		echo "<tr>";
		             echo "<td>".$row-> name;"</td>";
					 echo "<td>".$row->offNum."</td>";
					 echo "<td>".$row->	floor; "</td>";
					 echo "<td>". $row->round; "</td>";
                     echo  "<td>". $row ->maintNum;"</td>";
				     echo"<td>". $row-> dep;"</td>";
					
					 echo "</tr>";
			echo "</table>";
         
    }}
 	
   else{
	echo "<h3>"."الاسم غير موجود "."</h3>";
}
?>
</section>
			<?php


			$servername = "localhost";
			$username = "root";
			$password = "";

			try {
				$conn = new PDO("mysql:host=localhost;dbname=my", "root", "");
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				$stmn = $conn->prepare("Select * from office;");
				$stmn->execute();
				$result = $stmn->fetchAll();

				echo "<br/>";
				echo "<table class='table table-hover'>";

				echo "<thread>
            <tr>
                <th scope='col'>الاسم</th>
                <th scope='col'>رقم المكتب</th>
                <th scope='col'>الدور</th>
                <th scope='col'>الدوار</th>
                <th scope='col'>رقم الصيانة</th>
				<th scope='col'>القسم</th>

                <th scope='col'>Delete</th>
                <th scope='col'>Edit</th>
            </tr>
        </thread>";

				foreach ($result as $row) {
					echo "<tr>";
					echo "<td>" . $row["name"] . "</td>";
					echo "<td>" . $row["offNum"] . "</td>";
					echo "<td>" . $row["floor"] . "</td>";
					echo "<td>" . $row["round"] . "</td>";
					echo "<td>" . $row["maintNum"] . "</td>";
					echo "<td>" . $row["dep"] . "</td>";
					echo "<td> <a href='delete.php?" . $row['name'] . "'>Delete</a></td>";
					echo "<td> <a href='updateData.php?" . $row['name'] . " &name=" . $row["offNum"] . " &offNum=" . $row["floor"] . " &floor=" . $row["round"] . " &round=" . $row["maintNum"] . "&maintNum" . $row["dep"] . "'>Edit</a></td>";
				    echo "</tr>";
				}

				echo "</table>";

			} catch (PDOEXCEPTION $e) {
				echo "Connection Failed", $e->getMessage();
			}
			?>

			<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
		</body>

</html>