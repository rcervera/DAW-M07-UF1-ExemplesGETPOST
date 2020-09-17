<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
<title>Pàgina de resposta del formulari</title>
</head>
<body>
Valors enviats al formulari<br /><br />
sNom: <?php echo($_POST['sNom']) ?> <br />
sValor: <?php echo($_POST['sValor']) ?> <br />
sCodi: <?php echo($_POST['sCodi']) ?> <br />

<?php if ($_FILES["sUpload"]["error"] > 0) { ?>
S'ha produit un error: <?php echo( $_FILES["sUpload"]["error"]) ?> <br />
<?php } else { ?>
Fitxer d'upload: <?php echo ($_FILES["sUpload"]["name"]) ?><br />
Tipus de fitxer: <?php echo ($_FILES["sUpload"]["type"]) ?><br />
Mida del fitxer: <?php echo (($_FILES["sUpload"]["size"] / 1024)) ?> Kb<br />
<?php move_uploaded_file($_FILES["sUpload"]["tmp_name"], "upload/" . $_FILES["sUpload"]["name"]); ?>
Desat a: <?php echo("upload/" . $_FILES["sUpload"]["name"]) ?>
<?php } ?>
</body>
</html>

