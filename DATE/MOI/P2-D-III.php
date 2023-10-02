<?php

function jours_ecoules_depuis(int $jour, int $mois, int $annee): int
{
	$date_actuelle = getdate();

	$jour_actuel = $date_actuelle['mday'];
	$mois_actuel = $date_actuelle['mon'];
	$annee_actuelle = $date_actuelle['year'];


	if (checkdate($mois, $jour, $annee)) {
		$date_fournie = mktime(0, 0, 0, $mois, $jour, $annee);
		$date_actuelle = mktime(0, 0, 0, $mois_actuel, $jour_actuel, $annee_actuelle);
		$difference_en_secondes = $date_actuelle - $date_fournie;
		$difference_en_jours = $difference_en_secondes / (60 * 60 * 24);

		return $difference_en_jours;
	} else {
		return -1;
	}
}

$jours_ecoules = jours_ecoules_depuis(13, 9, 2022);
echo "Nombre de jours écoulés depuis la date fournie : $jours_ecoules jours";
