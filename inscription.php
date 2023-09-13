<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=membres;charset=utf8', 'root', 'root');

if(isset($_POST['envoi'])){
    if(!empty($_POST['adress']) AND !empty($_POST['mdp'])){

        $adress = htmlspecialchars($_POST['adress']);
        $mdp = sha1($_POST['mdp']);
        $inseruser = $bdd->prepare('INSERT INTO users(adress, mdp)VALUES(?, ?)');
        $inseruser->execute(array($adress, $mdp));

        $recupuser = $bdd->prepare('SELECT * FROM users WHERE adress = ? AND mdp = ?');
        $recupuser->execute(array($adress, $mdp));

        if($recupuser->rowCount() > 0){
            $_SESSION['adress'] = $adress;
            $_SESSION['mdp'] = $mdp;
            $_SESSION['id'] = $recupuser->fetch()['id'];
        }

        echo $_SESSION['id'];

    }else{
        echo"Veuillez compléter tous les champs...";
    }
}

?>

<!DOCTYPE html>
<html data-bs-theme="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <script src="https://kit.fontawesome.com/66ce4227d4.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="GoFinance.css">  
        <title>GoFinance</title>
    </head>

    <body>
        <div class="d-flex m-3">
            <a href="Systeme de gestion comptable web.html"><button type="button" class="btn-close" aria-label="Close"></button></a>
        </div>

        <main  class="form-signin w-25 m-auto">
            <form>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Adresse mail</label>
                </div>

                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Mot de passe</label>
                </div>

                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">vérifier le mot de passe</label>
                </div>

                <button class="btn btn- bg-success mt-2 d-flex m-auto" type="submit">s'inscrire</button>

            </form>
        </main>
    </body>

</html>