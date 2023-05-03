<?php
$text = $_GET["text"];
$bad_word = $_GET["bad_word"];

$text_length = strlen($text);
$text_replace = str_replace($bad_word, "***", $text);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Il testo che hai inserito è: <?php echo $text ?></h2>
    <h2>Il testo è lungo <?php echo $text_length ?> caratteri</h2>
    <h2>La versione censurata è: <?php echo $text_replace ?></h2>
</body>

</html>