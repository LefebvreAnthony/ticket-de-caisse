<?php
    function suppr_accents($str)
    {
        $str = preg_replace('#Ç#', 'C', $str);
        $str = preg_replace('#ç#', 'c', $str);
        $str = preg_replace('#è|é|ê|ë#', 'e', $str);
        $str = preg_replace('#È|É|Ê|Ë#', 'E', $str);
        $str = preg_replace('#à|á|â|ã|ä|å#', 'a', $str);
        $str = preg_replace('#@|À|Á|Â|Ã|Ä|Å#', 'A', $str);
        $str = preg_replace('#ì|í|î|ï#', 'i', $str);
        $str = preg_replace('#Ì|Í|Î|Ï#', 'I', $str);
        $str = preg_replace('#ð|ò|ó|ô|õ|ö#', 'o', $str);
        $str = preg_replace('#Ò|Ó|Ô|Õ|Ö#', 'O', $str);
        $str = preg_replace('#ù|ú|û|ü#', 'u', $str);
        $str = preg_replace('#Ù|Ú|Û|Ü#', 'U', $str);
        $str = preg_replace('#ý|ÿ#', 'y', $str);
        return preg_replace('#Ý#', 'Y', $str);
    }
    function convertFloatToEuros($float){
        // permet de séparer une chaine de caractère suivant un caractère défini
        $floatParts = explode('.', $float);
        if(strlen($floatParts[1]) < 2){
            $floatParts[1] = $floatParts[1] . 0;
        }
        // retourne le resultat de la fonction
        return $floatParts[0] . '€' . $floatParts[1];
    }
?>