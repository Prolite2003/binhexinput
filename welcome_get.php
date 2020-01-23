<?php
$word1 = $_GET["words"];
$hex1 = $_GET["hexcode"];



?>

<html>
<body>
your words: <br>
<?php echo $word1; ?><br> <br>

your hex code: <br>
<?php echo bin2hex($word1); ?><br> <br>

your hexcode: <br>
<?php echo $hex1; ?><br> <br>

your word: <br>
<?php echo hex2bin($hex1); ?><br> <br>

</body>
</html> 