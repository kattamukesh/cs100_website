!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<?php



      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $university = $_POST['university'];
      $intrested = $_POST['intrested sports'];
      $transcript = $_POST['transcript'];


      $toopen = fopen('userinfo2.txt','a+');

      $data = $name . "," . $email . "," . $phone . "," . $university . "," . $intrested . "," . $transcript;


      fwrite($toopen,$data);





echo "Your application applied succesfully";
?>

</body>
</html>