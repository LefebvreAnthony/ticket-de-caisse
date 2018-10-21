<?php
    setlocale (LC_TIME, 'fr_FR.utf8','fra');
    require_once('models/fonction.php');
    require_once('models/data.php');
    require_once('views/doctype.php');
    //var_dump($cart);
    /* sert à débuger : affiche la ligne, le type de la variable et son contenu et sa taille */
    
?>
    <div id='ticket'>
        <div class='zindex-2'>
            <img id='logo' src='assets/img/logoCarrefour.png' alt='logo Carrefour' title= 'logo Carrefour'>
            <h1 class='red tcenter uppercase ptsans'>Carrefour</h1>
            <p class='margin-tb'>
                Bonjour <?= $prenom?>,<br><!-- &nbsp = un espace insecable (qui empêche le retour à la ligne)-->
                Vous avez déjà acheté <?= $_SESSION['total'] ?>&nbsp;€ chez nous<br>
                Vous avez <?= $_SESSION['ttreduction'] ?>&nbsp;€ de réduction sur votre compte Zeub
            </p>
            <?php
                foreach($cart as $categorie => $articles){//parcours d'un tableau associatif
                    if(empty($articles)){//empty = ci le tableau est vide renvoie un type booleen true ou false
                        //break = arrêter la boucle pour repartir à la boucle suivante
                        break;
                    }
                    echo "<div class=\"categorieArticle\">
                    <h2 class='categorie-".  strtolower(suppr_accents($categorie)) . " categorieTitre'>" . $categorie . "</h2>
                    <ul>";
                    foreach($articles as $article){//parcours d'un tableau non associatif
                        $total = $total + $article['prix'];
                        echo "<li class='relative'>". $article['nom'] . "<span class='prixArticle'>". convertFloatToEuros($article['prix']) ."</span></li>";
                    }
                    echo '</ul></div>';
                }
            ?>
            <div class='bold margin-tb tright'>
                <?= convertFloatToEuros($total) ?>
            </div>
            <footer class='tcenter'>
                Edité le <?= strftime('%A %d %B %Y à %H:%M:%S ');?>
                <br><br>
                CARREFOUR ANNEMASSE<br>
                98 Rue des ACCASIAS<br>
                74100 ANNEMASSE
            </footer>
        </div>
        <img id='logoFond' src='assets/img/logoCarrefour.png' alt='logo Carrefour' title='logo Carrefour'>
    </div>
<?php
    require_once('views/eof.php');
    $_SESSION['total'] += $total;
    $_SESSION['ttreduction'] += $total * 0.1;
?>