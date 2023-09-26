<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>String PHP</title>
</head>
<body>
<h1>Berlatih String PHP</h1>
<?php
echo "<h3> Soal No 1</h3>";
$first_Sentence = "Hello PHP.";
echo $first_Sentence;
echo "<br/>";
echo "Panjang String \"$first_Sentence\" adalah: ",strlen ( $first_Sentence);
echo "<br/>";
echo "Jumlah Katanya adalah : ",str_word_count($first_Sentence);
echo "<br/>";
echo "<br/>";
$second_sentence = "I'm ready for the challenges";
echo $second_sentence;
echo "<br/>";
echo "Panjang String \"$second_sentence\" adalah: ",strlen ( $second_sentence);
echo "<br/>";
echo "Jumlah Katanya adalah : ",str_word_count($second_sentence);
echo "<br/>";
echo "<br/>";
echo "<h3> Soal Nomor 2</h3>";
$string2 = "I Love PHP";
echo "<Label> String : </Label>\"$string2\" <br/>";
echo "Kata Pertama : ".substr($string2,0,1) ."<br/>";
echo "Kata Kedua : " .substr($string2,2,5)."<br/>";
echo "Kata Ketiga : " .substr($string2,7,9)."<br/>";
echo "<br/>";
echo "<h3> Soal Nomor 3</h3> <br/>";
$string3 = "PHP Is Old But Sexy" ."<br/>";
echo "<label>String : </label>\"$string3\" " ."<br/>";
$newstring3 = str_replace("Sexy","Awesome",$string3);
echo $newstring3;

?>
</body>
</html>
