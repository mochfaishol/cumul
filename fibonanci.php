<h2>Deret Fibonacci Dinamis Dengan PHP</h2>
<hr>
<form action="" method="get">
Nilai Ke-n <input type="number" name="n" placeholder="Max 100" required>
<input type="submit" value="Generate">
</form>
<hr>
<h3>Hasil Deret Bilangan Fibonacci</h3>

<?php


$deret[1] = 0;
$deret[2] = 1;

$n = isset($_GET['n'])?$_GET['n']:'1';

if ($n >= 3 and $n <= 100)
{
 $hasil .= "$deret[1], $deret[2]";
 for($i=3;$i<=$n;$i++)
 {
  $x=$i-1;
  $y=$i-2;

  $deret[$i] = $deret[$x] + $deret[$y];
  $hasil .= ", $deret[$i]";

 }
 echo "<b>Deret Bilangan Fibonacci 1 - $n</b>";
 echo "<div style='color:blue'>Output: $hasil</div>";
} else {
 echo "<b style='color:red'>Maaf nilai n harus diantara 3 s/d 100<b>";
}
?>