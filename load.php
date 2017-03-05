<html>
<body>
<?php
/*First Name: echo $_POST["first"];<br>
Last Name: echo $_POST["last"];<br>
Age: echo $_POST["age1"];<br>
Phone: echo $_POST["phone"]<br>
php echo $_POST["dob"];?><br>
Gender:<?php echo $_POST["gender"];?><br>
Info:<?php echo $_POST["info"];?><br>
*/
//<?php
$dsn = "pgsql:"
    . "host=ec2-23-21-204-166.compute-1.amazonaws.com;"
    . "dbname=d3sed8mb5k6236;"
    . "user=unvxcwhjdfxbmz;"
    . "port=5432;"
    . "sslmode=require;"
    . "password=bdf5a4d69bcf02a8eea4e1e4871b1b9fb1671af0da6ff539910c67b64e6ef472";

$db = new PDO($dsn);
$query = "insert into patient_tb values($_POST['first'],$_POST['last'],$_POST['age1'],$_POST['dob'],$_POST['gender'],$_POST['phone'],$_POST['info'])";


$result=$db->query($query);

?>
<h4>task complete<h4>
</body>
</html>