


<?php
 			
 			$numero1 = $_POST ['num1'];
 			$numero2 = $_POST ['num2'];
 			$op      = $_POST ['tipo'];




if ($op == "soma") {

     $res = $numero1 + $numero2;

     echo "O resultado do seu caulculo: ";
     echo $res;

} elseif ( $op == "multi") {
	
	$res = $numero1 * $numero2;

    echo "O resultado do seu caulculo: ";
	echo $res;
}if ($op == "sub") {
	
	$res = $numero1 - $numero2;

    echo "O resultado do seu caulculo: ";
	echo $res;
}elseif ( $op == "div") {
	
	$res = $numero1 / $numero2;

	echo "O resultado do seu caulculo: ";
	echo $res;

	echo "<br>";
}
			



?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <a href="/praticando/caulculadora.html" title="Novo calculo"><br> >Novo calculo<</a>
</body>
</html>
