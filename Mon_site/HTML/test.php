<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="C:\xampp\htdocs\TD-WEB-SIO\Mon site">
<title>CV en ligne</title>
<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Sonsie+One" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="..\CSS\test.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>

</head>

<body>

<header>
<h1>Portfolio</h1>
</header>

<nav>
<ul>
<?php
$menu=yaml_parse_file("../YAML/menu.yaml");
foreach($menu AS $fichier=>$nom){
	echo '<li><a href="'.$fichier.'.php">'.$nom.'</a></li>';
}
?>


</ul>


</nav>
<br>
<br>
<br>
<br>
<br>
<main>

<?php
$data=yaml_parse_file("../YAML/Acceuil.yaml");
echo $data["Page"];
echo '<p>Nom de famille : '.$data["lastname"].'</p>';
echo '<p>Prénom : '.$data["firstname"].'</p>';
echo $data["accroche"];
echo $data["photo"];
?>
<br>
<br>
<br>
<br>
<br>
<?php
$data=yaml_parse_file("../YAML/A_propos.yaml");
echo $data["Page"];
echo $data["Accroche"];
echo $data["Paragraphe"];
echo $data["photo"];
?>
<br>
<br>
<br>
<br>
<br>
<?php
$data=yaml_parse_file("../YAML/Competences.yaml");
echo $data["Page"];
echo $data["Domaines"];
echo '<p>Français : '.$data["Francais"].'</p>';
?>
<br>
<br>
<br>
<br>
<br>
<?php
$menu=yaml_parse_file("../YAML/Experiences.yaml");
foreach($menu AS $fichier=>$nom){
	echo '<li><a href="'.$fichier.'.php">'.$nom.'</a></li>';
}
?>
<br>
<br>
<br>
<br>
<br>
<?php
$menu=yaml_parse_file("../YAML/Formation.yaml");
foreach($menu AS $fichier=>$nom){
	echo '<li><a href="'.$fichier.'.php">'.$nom.'</a></li>';
}
?>
<br>
<br>
<br>
<br>
<br>
<?php
$menu=yaml_parse_file("../YAML/Contact.yaml");
foreach($menu AS $fichier=>$nom){
	echo '<li><a href="'.$fichier.'.php">'.$nom.'</a></li>';
}
?>

</main>

</body>
</html>
