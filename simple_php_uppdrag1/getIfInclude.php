<head><meta charset='utf-8'></head>

<h2>Hämtar värde och laddar innehåll utifrån det</h2>

<!--länkar-->
<a href="getIfInclude.php?page=sid1">Sida1</a>
<a href="getIfInclude.php?page=sid2">Sida2</a>

<?php 
    //hämtar page-värdet (om det finns) och sparar det i en variabel som heter $page
	$page = $_GET['page']; 


	//kontrollerar vilken fil som ska inkluderas
	if($page=="sid1")
		$file = "sida1.html";
	else if($page=="sid2")
		$file = "sida2.html";

	//inkludera filens innehåll på den här sidan
	include $file; 
?>




<div style="height:100px;"></div>

<!-- här under ligger koden upprepad - så att den syns på webbsidan -->

Koden ser ut så här:
<br/>
<textarea cols="100" rows="25" style="background:#f7f7f7;">
<head><meta charset='utf-8'></head>
<h2>Hämtar värde och laddar innehåll utifrån det</h2>

<!--länkar-->
<a href="getIfInclude.php?page=sid1">Sida1</a>
<a href="getIfInclude.php?page=sid2">Sida2</a>

&lt;?php 
    //hämtar page-värdet (om det finns) och sparar det i en variabel som heter $page
	$page = $_GET['page']; 


	//kontrollerar vilken fil som ska inkluderas
	if($page=="sid1")
		$file = "sida1.html";
	else if($page=="sid2")
		$file = "sida2.html";

	//inkludera filens innehåll på den här sidan
	include $file; 
?&gt;
</textarea>