<?php
/* @var $this SiteController */

require("metainformacion/prueba.php");

$this->breadcrumbs=array(
	'Prueba',
);
?>

<h1><?php echo "he creado mi primera vista"; ?></h1>

<script type="text/javascript">
	$(function(){
		$("#mostrar").html("<h3>incluyendo jquery</h3>");

	});
</script>

<a href="index.php?r=site/page&view=articulo-1">Articulo 1</a>

<div id="mostrar"></div>