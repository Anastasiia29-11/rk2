<html>
<head> <meta charset="utf-8"> </head>
<body>
<p> Радчук Анастасия. ИУ4-13Б </p>
<h1> Вариант 12  </h1>
<h2> Задание 1 </h2>
<?php
echo "<table border="1">";
for ($i=0; $i<101; $i++) {
echo "<tr>
<td>",$i,"</td>
<td>",$i*$i,"</td>
<td>",$i*$i*$i,"</td>
</tr>";}
echo "</table>";
?>
<h2> Задание 2 </h2>
<form methods="post">
Длина: <input type="text"  name="dl" value="0">
Ширина: <input type="text" name="sh" value="0">
Высота: <input type="text" name="vs" value="0">
<select multiple name="options[]">
<option value="1"> Площадь </option>
<option value="2"> Объем </option>
<input type="submit" name="Отправить">
</select>
  </form>
<?php
$a=$_POST['dl'];
$b=$_POST['sh'];
$c=$_POST['vs'];
If ($_POST['option']=="1") {
  echo "4*$a*$b+2*$a*$c";}
  else if ($_POST['option']=="2") {
  echo "$a*$b*$c";}
  else { echo "ошибка";}
 ?>
  </body>
  </html>
 
