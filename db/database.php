<?php

include_once __DIR__ . '/../models/Movie.php';

$movies = [];

$johnWick = new Movie('Title: John Wick - 3', 'anno: 2019', 'regista : Chad Stahelski', 'Cast: Keanu Reeves, Halle Berry, Lance Reddick, Ian McShane', ' durata: 131 min', 'genere: action');

$theHardWay = new Movie('Title: The Hard Way', 'anno: 2019', ' regista: Keoni Waxman', 'Michael Jai White, Randy Couture, Madalina Anea , Luke Goss', 'durata: 94 min', 'genere: action');

$coachCarter = new Movie('Title: Coach Carter', 'anno : 2005', 'regista: Thomas Carter', 'cast :Samuel Jackson, Ricky Gonzalez, Rob Brown , Channing Tatum', 'durata: 136 min', 'genere: dramatic sportive');

$missionImpossible = new Movie('Title: Mission Impossible 4', 'anno: 2011', 'regista: Brad Bird', 'cast: Tom Cruise, Paula Patton, Simon Pegg , Jeremy Renner', 'durata: 133 min', 'genere: espionage, action');

$laMummia = new Movie('Title: La Mummia', 'anno: 2017', 'regista: Alex Kurtzman', 'cast: Tom Cruise, Sofia Boutella , Annabelle Wallis, Russell Crowe', 'durata: 107 min', 'genere: adventure, fantasy, action');

$reArtu = new Movie(' Title: King Arthur - il potere della spada', 'anno: 2017', 'regista: Guy Ritchie', 'cast: Charlie Hunnam, Àstrid Bergès-Frisbey, Djimon Hounsou, Jude Law, Aidan Gillen', 'durata: 126 min', 'genere: adventure, fantasy, action');

array_push($movies, $johnWick, $theHardWay, $coachCarter, $missionImpossible, $laMummia, $reArtu);
