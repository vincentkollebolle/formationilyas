<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <h1>Liste de nos formations </h1>
            <nav>
                <a href="search.php">Toutes nos formations </a>
            </nav>
        </div>
        <div class="row">
            <div class="col-12">    
                <form action="search.php" method="GET">
                    <select name="dpt">
                        <option value="69">Rhône</option>
                        <option value="01">Ain</option>
                        <option value="92">Nanterre</option>
                    </select>
                    <input type="submit" value="filtrer par département"/>
                </form>

                <form action="search.php" method="GET">
                    <input type="text" name="prixmax" placeholder="taper le prix maximum voulu"/>
                    <input type="submit" value="filtrer par prix max"/>
                </form>
            </div>
        </div>
        <div class="row">
            <h1> Formations Trouvées (<?=count($formations)?>)
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card-group">
                <?php
                    if( count($formations) == 0) {
                        echo "pas de résultats...";
                    }
                    foreach($formations as $formation) {
                            ?>
                            <div class="card" style="width: 18rem;">
                                <img src="https://lyon-rhone.fff.fr/wp-content/uploads/sites/105/2016/10/formation-600x352.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><?=$formation['nomformation'];?></h5>
                                    <p class="card-text"><?=$formation['description']?></p>
                                    <ul>
                                        <li>Prix: <?=$formation['prix']?></li>
                                        <li>Departement: <?=$formation['departement']?></li>
                                        <li>Type: <?=$formation['type']?></li>
                                    </ul>
                                </div>
                            </div>
                            <?php
                        }
                ?>
                </div>       
            </div>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>

