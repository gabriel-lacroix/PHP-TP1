
<!DOCTYPE html>
<html>
<?php
// header( 'Location: login.php' ) ;
?>
<head>
<title>Message-Board</title>
</head>
<body>

<?php
$nom=$_POST['nom'];
echo "Bonjour " . $nom;
?>

<form action="" method="POST">
Message:<br><textarea cols="60" rows="5" name="message"></textarea><br>
<input type="submit" value="Poster votre message">
</form>
</body>

</html>


