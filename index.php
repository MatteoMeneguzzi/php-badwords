<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $text = 'Quella puzza non se ne andava, era una puzza infernale, odiavo quella puzza, puzza puzza puzza che puzza.';
        $length = strlen($text);
        // Avrei potuto anche mettere "strlen($text);" 
        // direttamente nell'echo nel p:
        // <p><?php echo strlen($text);...
        $bad_word = $_GET['bad_word'];
        $replacing = str_replace($bad_word, '***', $text);
    ?>
    <header>

<p><?php echo $text; ?></p>

<p><?php echo $length; ?></p>

<p><?php echo $bad_word; ?></p>

<p><?php echo $replacing; ?></p>

</header>
</body>
</html>