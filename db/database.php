<?php

include_once __DIR__ . '/../models/Movie.php';

$movies = [];

$johnWick = new Movie('John Wick - 3', 2019, 'Chad Stahelski', 'Keanu Reeves, Halle Berry, Lance Reddick, Ian McShane', '131 min', 'action');

$theHardWay = new Movie('The Hard Way', 2019, ' Keoni Waxman', 'Michael Jai White, Randy Couture, Madalina Anea , Luke Goss', '94 min', 'action');

$coachCarter = new Movie('The Hard Way', 2019, ' Keoni Waxman', 'Michael Jai White, Randy Couture, Madalina Anea , Luke Goss', '94 min', 'action');

$missionImpossible = new Movie('The Hard Way', 2019, ' Keoni Waxman', 'Michael Jai White, Randy Couture, Madalina Anea , Luke Goss', '94 min', 'action');

$laMummia = new Movie('The Hard Way', 2019, ' Keoni Waxman', 'Michael Jai White, Randy Couture, Madalina Anea , Luke Goss', '94 min', 'action');

$reArtu = new Movie('The Hard Way', 2019, ' Keoni Waxman', 'Michael Jai White, Randy Couture, Madalina Anea , Luke Goss', '94 min', 'action');

array_push($movies, $johnWick, $theHardWay, $coachCarter, $missionImpossible, $laMummia, $reArtu);
