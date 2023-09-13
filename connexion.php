<?php
$bdd = new PDO('mysql:host=localhost;dbname=membres;charset=utf8;', 'root', 'root');
if(isset($_POST['envoi'])){
    if(!empty($_POST['adress']) AND !empty($_POST['mdp'])){
        $adress = htmlspecialchars($_POST['adress']);
        $mdp = sha1($_POST['mdp']);

        $recupuser = $bdd->prepare('SELECT * FROM users WHERE adress = ? AND mdp = ?');
        $recupuser->execute(array($adress, $mdp));

        }else{
            echo "error";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="account" content="width=device-width, initial-scale=1.0">
    <title>connexion</title>
</head>
<body>
    
    <form method="POST">

        <input type="text" name="adress" autocomplete="on">
        <input type="text" name="mdp" autocomplete="on">
        <input type="submit" name="envoi">
    </form>

</body>
</html>