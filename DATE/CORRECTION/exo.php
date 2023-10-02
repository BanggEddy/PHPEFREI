<?php

/********* Partie 2 ****************************/
/********* D. Les fonctions ********************/
/********* III. Passage d'arguments ************/

/* 1)

	Ecrivez une fonction 
	qui calcule le nombre de jours écoulés depuis une date
	fournie en paramètre (3 paramètres : jour, mois, année)

	On pourra, pour se simplifier la vie, oublier le cas des années bissextiles

	P.S. : N'oubliez pas de checker les paramètres !
*/

function jours_ecoules_depuis(int $jour, int $mois, int $annee): int {
    if (!checkdate($mois, $jour, $annee)) { // Vérifier les infos en entrée !
        die('Erreur ! Date invalide !');
    }

    /** Version "académique" n°1 */
    // $ajd = date_create();
    // $input = date_create($annee . '-' . $mois . '-' . $jour); // Format YYYY-MM-DD

    // $result = 0;
    // while ($input->format('Y-m-d') < $ajd->format('Y-m-d')) {
    //     $result++;
    //     $input->add(new DateInterval('P1D')); // On ajoute un jour
    // }

    // return $result;

    /** Version "académique" n°2 */
    $jourToday = date('d');
    $moisToday = date('m');
    $anneeToday = date('Y');

    $nbJours = $jourToday - $jour;
    $nbMois = $moisToday - $mois;
    $nbAnnee = $anneeToday - $annee;

    return round($nbJours + $nbMois * 365.25 / 12 + $nbAnnee * 365.25);

    /** Version "pro" */
    // if ($jour < 10) $jour = '0' . $jour; // On comble par des 0 le jour
    // if ($mois < 10) $mois = '0' . $mois; // On comble par des 0 le mois


    // return $input->diff($ajd)->d; // On renovie la différence (diff) en jours (d)
}


/**
 * 1/ Comment avoir la date du jour ?
 * 2/ Décomposer la date du jour selon les besoins
 * 3/ Calculer la différence (en jours)
 * 4/ BONUS : Traiter le cas des années bissextiles
 */

echo jours_ecoules_depuis(2, 11, 2023);
