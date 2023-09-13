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
            <button type="button" class="btn-close" aria-label="Close" data-bs-toggle="modal" data-bs-target="#exampleModal"></button>
        </div>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Bonjour</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                Etes vous sur de vouloir quitter cette page ?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">je souhaite continuer</button>
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal2">quitter</button>
              </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel2">Bonjour</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                ETES VOUS VRAIMENT SUR DE VOULOIR QUITTER ???!!!!!
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ok je reste</button>
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal3">laisser moi partir</button>
              </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel3" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel3">Bonjour</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                ETES VOUS VRAIMENT SUR DE VOULOIR QUITTER ???!!!!!
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-success btn-lg" data-bs-dismiss="modal">JE SOUHAITE RESTER !</button>
                <a href="connexion.php"><button type="button" class="btn btn-secondary">quitter</button></a>
              </div>
            </div>
          </div>
        </div>

        <main  class="form-signin w-25 m-auto pt-5">
            <form method="post">
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" name="adress" placeholder="name@example.com">
                    <label for="floatingInput">Adresse mail</label>
                </div>

                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="mdp">
                    <label for="floatingPassword">Mot de passe</label>
                </div>

                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="mdp">
                    <label for="floatingPassword">vérifier le mot de passe</label>
                </div>
                <input name="envoi" type="hidden" value="truc" />

                <button class="btn btn- bg-success mt-2 d-flex m-auto" type="submit">s'inscrire</button>
                
            </form>
        </main>
    </body>

</html>