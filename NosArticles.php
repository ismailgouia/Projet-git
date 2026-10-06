<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos articles</title>
</head>
<body>

<?php
$article = [
    "Imprimante",
    "Stylet",
    "Enceintes",
    "Tablette"
];
?>

<ul>
<?php
foreach ($article as $value) {
    echo "<li>$value</li>";
}
?>
</ul>
<ul>
<?php

if (isset($article)) {

    foreach ($article as $value) {
        echo "<li>$value</li>";
    }

}

?>
</ul>
</body>
</html>