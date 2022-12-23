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
	echo '<li><a href="#'.$fichier.'">'.$nom.'</a></li>';
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
echo "<h1 id='Acceuil'>".$data["Page"]."</h1>";
echo '<p>Nom de famille : '.$data["lastname"].'</p>';
echo '<p>Prénom : '.$data["firstname"].'</p>';
echo $data["accroche"];
echo "<p>".$data["photo"]."<p>";
?>
<br>
<br>
<br>
<br>
<br>
<?php
$data=yaml_parse_file("../YAML/A_propos.yaml");
echo "<h1 id='A_propos'>".$data["Page"]."</h1>";
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
echo "<h1 id='Competences'>".$data["Page"]."</h1>";
echo $data["Domaines"];
echo '<p>Français : '.$data["Francais"].'</p>';
echo '<p>Mathématiques : '.$data["Mathematiques"].'</p>';
echo '<p>Anglais : '.$data["Anglais"].'</p>';
echo '<p>Espagnol : '.$data["Espagnol"].'</p>';
echo '<p>HTML : '.$data["HTML"].'</p>';
echo '<p>PHP : '.$data["PHP"].'</p>';
echo '<p>CSS : '.$data["CSS"].'</p>';
echo '<p>YAML : '.$data["YAML"].'</p>';
?>
<br>
<br>
<br>
<br>
<br>
<?php
$menu=yaml_parse_file("../YAML/Experiences.yaml");
echo "<h1 id='Experiences'>".$data["Page"]."</h1>";
echo '<p>Expériences : '.$data["Experiences"].'</p>';
?>
<br>
<br>
<br>
<br>
<br>
<?php
$menu=yaml_parse_file("../YAML/Formation.yaml");
echo "<h1 id='Formation'>".$data["Page"]."</h1>";
echo '<p>Nom de la formation : '.$data["Nom de la formation"].'</p>';
echo '<p>Etablissement : '.$data["Etablissement"].'</p>';
echo '<p>Date de début de la formation : '.$data["Date debut formation"].'</p>';
echo '<p>Date de la fin de la formation : '.$data["Date fin formation"].'</p>';
echo '<p>Lieu : '.$data["Lieu"].'</p>';
echo '<p>Contenu de la formation : '.$data["Contenu formation"].'</p>';
?>
<br>
<br>
<br>
<br>
<br>
<?php
$menu=yaml_parse_file("../YAML/Contact.yaml");
echo "<h1 id='Contact'>".$data["Page"]."</h1>";
echo '<p>Adresse email : '.$data["Email"].'</p>';
?>

</main>

</body>
</html>