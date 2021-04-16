<html>
<form action="#" method="POST">
		Date <input type="int" name="date">
		Month <input type="int" name="month">
		Year <input type="int" name="year">
		<input type="submit" name="submit">
	</form>
</html>
<?php
if(isset($_POST["submit"]))
{
	$client=new SoapClient("http://localhost:8080/age_calculator/AgeCalculator?WSDL");
	$n=$_POST["date"];
	$n1=$_POST["month"];
	$n2=$_POST["year"];
	
	$params= array(
	"date" => $n,
	"month" => $n1,
	"year" => $n2
	);
	$response=$client->__soapCall("calculate",array($params));
	echo "<br/>";
	echo $response->return;
}
?>
