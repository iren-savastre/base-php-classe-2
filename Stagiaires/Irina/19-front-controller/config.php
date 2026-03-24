<?php
#Formateur/19-front-controller/config.php 

/*
*
*/Ce fichier doit etre copier en local pour le projet sous le nom de config.php
*/

* Ce fichier a la racine du project,va contenir les constantes
*Indispensable a son functionnement, Il ne doit pas etre suivi
*/
#Racine de notre projet quelque soit le serveur
#Dans une constante (on ne peut pas  la réécrire)
const PATH_TO_PROJET_ROOT = __DIR__;

# Pages acceptées pour notre site, a ajuter au tableaudans config/php
const Nos_PAGES = ['accueil','contact','actualite'];

### Creation de vues


