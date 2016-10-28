<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<form method="GET">
<div class='photos'>
	<div>
	 <img class="jpg" src="http://planetcalc.ru/users/2/1271080992.JPG">
	 </div>
	 <div><h2> Биссектриса треугольника  </h2></div>
	Сторона a: <input class='stor' type='text' name='strA'  value='<? if (isset($_GET['strA'])) {
		echo  htmlspecialchars($_GET['strA']) ;
	 } ?>' > <br>
	 Сторона b: <input class='stor' type='text' name='strB' value='<? if (isset($_GET['strB'])) {
		echo  htmlspecialchars($_GET['strB']) ;
	 } ?>' > <br>
	 Сторона c: <input class='stor' type='text' name='strC' value='<? if (isset($_GET['strC'])) {
		echo  htmlspecialchars($_GET['strC']) ;
	 } ?>' > <br>
	 
	 <input class="sub" type ="submit" value="Рассчитать" name="add"> 
	 <?php
	 $strA=null;
	 $strB=null;
	 $strC=null;
	 if (isset ($_GET['strA']) && isset ($_GET['strB'])&& isset ($_GET['strC'])) { 
		$strA = htmlspecialchars($_GET['strA']); 
		$strB = htmlspecialchars($_GET['strB']); 
		$strC = htmlspecialchars($_GET['strC']);
		if (!is_numeric($strA) || !is_numeric($strB)|| !is_numeric($strC)){
				echo "Введите числовое значение!";
		} elseif ($strA < 0 || $strB < 0|| $strC < 0) {
				echo "Длина не может быть отрицательной!";
		} elseif ($strA+$strB <$strC) {
				echo "Длина не корректна";		
		} else {
			Function Bissektrisa ($strA, $strB,$strC) {
				$result = (sqrt(($strA*$strB)*($strA+$strB+$strC)*($strA+$strB-$strC)))/($strA+$strB);
				return $result;
			} ;
			echo "Биссектриса равна " . number_format(Bissektrisa ($strA, $strB,$strC), 2, ',', ' ');
		}
	}
	 ?>
	 </form>
</div>
<style type="text/css">

}
.sub {
	float: right;
}
.stor{
	margin: 25px 25px 25px 15px;
	width: 300px;
}
</style>
</body>
</html>