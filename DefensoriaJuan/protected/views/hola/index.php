<h1>
	Siguenos en twitter:
	<?php echo $twitter;?>
</h1>
<!-- recibe el parametro $model con cada registro de la consulta generada desde el controller -->
<?php foreach ($model as $registro): ?>

	<h1><?= $registro->username; ?></h1>

<?php endforeach; ?>