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
    <body class="p-3 mb-2 bg-body-tertiary text-white" style="--bs-bg-opacity: .8;">

        <header>
            <nav>
                <img src="Plan_de_travail_2.svg" class="rounded float-end" width="5%" height="5%">
                  <a href="Systeme de gestion comptable web.php"><button class="btn btn-outline-success me-2" type="button">GoFinance</button></a>
                  <a href="board.php"><button class="btn btn-sm btn-outline-secondary" type="button">Tableau de bord</button></a>
                  <a href="management.php"><button class="btn btn-sm btn-outline-secondary" type="button">Gestion</button></a>
                  <a href="review.php"><button class="btn btn-sm btn-outline-secondary" type="button">Bilan</button></a>
                  <a href="connexion.php"><button class="btn btn-sm btn-outline-secondary" type="button">Compte</button></a>
            </nav>
        </header>

        

        <div class="d-flex p-3 fs-3 fw-bold modal-body">
          <p>
            <button class="btn btn-dark" data-bs-toggle="popover" title="Plus d'information dans l'onlget tableau de bord">Récapitulatif des 15 dernières modifications</button>
          </p>
        </div>

        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>Date</th>
                <th>Type de modifications</th>
                <th>montant</th>
              </tr>
            </thead>
            
            <tbody>
              <tr>
                <td> ex : 13/09/2023</td>
                <td>ex : ajout</td>
                <td class="text-success"> ex : +25</td>
              </tr>
           
              

            </tbody>
          </table>
        </div>

          <a href="#" class="to-top">
            <i class="fas fa-chevron-up"></i>
        </a>
        <script src="test.js"></script>
    </body>

</html>