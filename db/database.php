<?php

include_once __DIR__ . '/../models/Movie.php';

$movies = [];

$johnWick = new Movie('John Wick - 3', 2019, 'Chad Stahelski', 'Keanu Reeves, Halle Berry, Lance Reddick, Ian McShane', '131 min', 'action');

$theHardWay = new Movie('The Hard Way', 2019, ' Keoni Waxman', 'Michael Jai White, Randy Couture, Madalina Anea , Luke Goss', '94 min', 'action');

$coachCarter = new Movie('Coach Carter', 2005, 'Thomas Carter', 'Samuel Jackson, Ricky Gonzalez, Rob Brown , Channing Tatum', '136 min', 'dramatic sportive');

$missionImpossible = new Movie('Mission Impossible 4', 2011, 'Brad Bird', 'Tom Cruise, Paula Patton, Simon Pegg , Jeremy Renner', '133 min', 'espionage, action');

$laMummia = new Movie('La Mummia', 2017, 'Alex Kurtzman', 'Tom Cruise, , Sofia Boutella , Annabelle Wallis, Russell Crowe', '107 min', 'adventure, fantasy, action');

$reArtu = new Movie('King Arthur - il potere della spada', 2017, ' 	Guy Ritchie', 'Charlie Hunnam, Àstrid Bergès-Frisbey, Djimon Hounsou, Jude Law, Aidan Gillen', '126 min', 'adventure, fantasy, action');

array_push($movies, $johnWick, $theHardWay, $coachCarter, $missionImpossible, $laMummia, $reArtu);
