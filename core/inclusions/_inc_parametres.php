﻿<?php
// ce fichier est destiné à être inclus dans les pages PHP qui ont besoin de se connecter à une base de données
// 2 possibilités pour inclure ce fichier :
//     include_once ('_inc_parametres.php');
//     require_once ('_inc_parametres.php');

// connexion de l'application cliente au SGBD MySQL
// $HOTE = "localhost";	// nom du serveur de données : localhost ou serv-wamp1 ou serv-wamp1
// $PORT = '3306';			// numéro du port
// $USER = "root";			// nom de l'utilisateur
// $PWD  = "";				// son mot de passe					
// $BDD  = "astucepcv2";		// nom de la base de données

// // connexion de l'application cliente au SGBD MySQL
$HOTE = "mysql-astucepc.alwaysdata.net";	// nom du serveur de données
$PORT = '3306';			// numéro du port
$USER = "astucepc";			// nom de l'utilisateur
$PWD  = "ilojof12";		// son mot de passe					
$BDD  = "astucepc_bdd";		// nom de la base de données	