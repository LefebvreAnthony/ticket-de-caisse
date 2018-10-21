<?php
    session_start();
    if(isset($_GET['reset']) && $_GET['reset'] == '1'){
        session_destroy();
    }
    //quand y'a flèche = associatif, et à gauche la key et à droite la value
    if(!isset($_SESSION['total'])){
        $_SESSION['total'] = 0;
    }
    if(!isset($_SESSION['ttreduction'])){
        $_SESSION['ttreduction'] = 0;
    }
    //var_dump($_SESSION, $_GET);
    $prenom = 'Anthony';
    $total = 0;
    /*
    if(isset($_GET['reset']) && $_GET['reset'] == '1'){
        $_SESSION['total'] = 0;
        $_SESSION['ttreduction'] = 0;
    }*/
    $cart = array(
        'Fruits' => array(
            array(
                'nom' => 'Bananes',
                'prix' => 1.01,
            ),
           array(
                'nom' => 'Oranges',
                'prix' => 1.5,
            ),
            array(
                'nom' => 'Kiwis',
                'prix' => 0.89,
            ),
        ),
        'Légumes' => array(
            array(
                'nom' => 'Concombres',
                'prix' => 1.55,
            ),
           array(
                'nom' => 'Avocats',
                'prix' => 2.45,
            ),
            array(
                'nom' => 'Tomates',
                'prix' => 0.89,
            ),
            array(
                'nom' => 'Haricots',
                'prix' => 1.89,
            ),
        ),
        'Viandes' => array(
            array(
                'nom' => 'Boeuf',
                'prix' => 16.55,
            ),
           array(
                'nom' => 'Boeuf',
                'prix' =>22.5,
            ),
        ),
        'Poissons' => array(
        ),
    );
?>