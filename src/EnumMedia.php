<?php
abstract class EnumETAT
{
	const NOUVEAU = 0;
    const DISPONIBLE = 1;
    const EMPRUNTE = 2;
    const AREPARER = 3;
    const ASUPPR = 4;
    const SUPPR = 5;
}

abstract class EnumACTION
{
	const CREER = 0;
    const METTRE_EN_RAYON = 1;
    const METTRE_AU_REBUS = 2;
    const PRETER = 3;
    const RENDRE = 4;
    const PERDRE = 5;
    const REPARER = 6;
    const METRRE_A_REPARER = 7;
    const SUPPRIMER = 8;
}
?>