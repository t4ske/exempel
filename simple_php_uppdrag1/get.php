<head><meta charset='utf-8'></head>

<h2>Via $_GET kan man hämta värden från url-en</h2>

<p>Hämtar värde (sker osynligt)
<?php 
    //hämtar page-värdet (om det finns) och sparar det i en variabel som heter $page
	$page = $_GET['page']; 
?>

<p>Värdet utskrivet:
<strong>
<?php echo $page; ?>
</strong>

<div style="height:100px;"></div>

<!-- här under ligger koden upprepad - så att den syns på webbsidan -->

Koden ser ut så här:
<br/>
<textarea cols="100" rows="20" style="background:#f7f7f7;">
<head><meta charset='utf-8'></head>

<h2>Via $_GET kan man hämta värden från url-en</h2>

<p>Hämtar page-värde (sker osynligt)
&lt;?php 
    //hämtar (om det finns) och sparar det i en variabel som heter $page
	$page = $_GET['page']; 
?&gt;

<p>Värdet utskrivet:
<strong>
&lt;?php echo $page; ?&gt;
</strong>
</textarea>