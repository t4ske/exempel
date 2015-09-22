<?php
	ini_set('display_errors',1);  
	error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<title>Exempel på slump</title>
	<style> body{padding-bottom:700px;}</style>
</head>


<body>

<!-- =============== Exempel 1 ==================== -->
<h2>Slumptal och variabler</h2>
<?php include "ex1.abc";?>
<!--<h3>Kod:</h3>
<?php show_source("ex1.abc"); ?>-->
<hr>

<!-- =============== Exempel 2===================== -->
<h2>Summan  av två slumptal</h2>
<?php include "ex2.abc";?>
<hr>

<!-- =============== Exempel 3===================== -->
<h2>Utskrift baserat på ålder</h2>
<?php include "ex3.abc";?>
<hr>

<!-- =============== Exempel 4===================== -->
<h2>Flera utskrifter baserat på ålder</h2>
<?php include "ex4.abc";?>
<hr>

<!-- =============== Exempel 5===================== -->
<a name="ex5">
<h2>Inmatning</h2>
<?php include "ex5.abc";?>
<hr>

<!-- =============== Exempel 6===================== -->
<a name="ex6">
<h2>Utskrift som beror av inmatning</h2>
<?php include "ex6.abc";?>
<hr>

<!-- =============== Exempel 7===================== -->
<a name="ex7">
<h2>Intro till strängar och arrayer</h2>
<?php include "ex7.abc";?>
<hr>

<!-- =============== Exempel 8===================== -->
<a name="ex8">
<h2>Första och sista bokstav</h2>
<?php include "ex8.abc";?>
<hr>

<!-- =============== Exempel 9===================== -->
<a name="ex9">
<h2>Slå en tärning 6 gånger</h2>
<?php include "ex9.abc";?>
<hr>

<!-- =============== Exempel 10==================== -->
<a name="ex10">
<h2>Slå en tärning 36 gånger</h2>
<?php include "ex10.abc";?>
<hr>


</body>

</html>