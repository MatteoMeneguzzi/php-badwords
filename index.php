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
        $bad_word = $_GET['bad'];
        $replacing = str_replace('puzza', '***', $text);
    ?>
    <header>
<p>
<?php echo $text; ?>

<?php echo $length; ?>

<?php echo $bad_word; ?>

<?php echo $replacing; ?>
</p>
</header>
</body>
</html>