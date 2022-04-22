<html>
<head><title>Persegi Panjang</title></head>
<body>
<form method="post">
<table border=0>
<tr>
    <td>Panjang Persegi Panjang
    <td>:
    <td><input type="text" name="panjang"><br>
</tr>
<tr>
    <td>Lebar Persegi Panjang
    <td>:
    <td><input type="text" name="lebar"><br>
</tr>
<tr>
    <td><input type="submit" name="input-data" value=Input></td>     
</tr>
</table>
</form>
</body>
</html>
<?php
if (isset ($_POST["input-data"]))
{
$panjang=$_POST["panjang"];
$lebar=$_POST["lebar"];
$luas= $panjang*$lebar;
$keliling=2*($panjang+$lebar);
echo "Luas : $luas";
echo "<br/>";
echo "Keliling : $keliling";
}
?>