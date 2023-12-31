<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <script src="https://kit.fontawesome.com/66ce4227d4.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <link rel="stylesheet" href="GoFinance.css">  
        <title>GoFinance</title>
    </head>
    <body class="p-3 mb-2 bg-black text-white" style="--bs-bg-opacity: .8;">

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

        <div class="container">
            <canvas id="myChart"></canvas>
        </div>

        <script>
            // Sélectionnez le canvas
            var ctx = document.getElementById('myChart').getContext('2d');
          
            // Données du graphique
            var data = {
              labels: ['13/09/2023', '13/09/2023', '14/09/2023', '15/09/2023', '17/09/2023', '18/09/2023', '19/09/2023', '19/09/2023',
                       '20/09/2023', '21/09/2023', '23/09/2023', '23/09/2023', '24/09/2023', '26/09/2023', '28/09/2023'],
              datasets: [{
                label: 'Porte monnaie',
                data: [100, 105, 96, 94, 118, 122, 107, 89, 92, 101, 103, 87, 117, 112, 106],
                backgroundColor: 'rgba(100, 149, 237, 0.5)',
                borderColor: 'white',
                borderWidth: 1.25,
              }]
            };
          
            // Options du graphique
            var options = {
              scales: {
                y: {
                  beginAtZero: true
                }
              }
            };
          
            // Créez le graphique
            var myChart = new Chart(ctx, {
              type: 'bar',
              data: data,
              options: options
            });
        </script>

        <div class="card text-bg-info mb-3" style="max-width: 18rem;">
            <div class="card-header">Board</div>
            <div class="card-body">
              <h5 class="card-title">Info du graphique</h5>
              <p class="card-text">Le graphique ne contient que les 15 dernières modifications de votre porte monnaie.</p>
            </div>
        </div>


        <a href="#" class="to-top">
            <i class="fas fa-chevron-up"></i>
        </a>
        <script src="sgcw.js"></script>
    </body>

</html>