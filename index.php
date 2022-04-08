<?php

    require_once __DIR__ . '/database.php';

    $film1 = new Movie('Paura e delirio a Las Vegas', 'Terry Gilliam', 1998);
    $film2 = new Movie('Fast & Furious 6', 'Justin Lin', 2013);
    $film3 = new Movie('Altrimenti ci arrabbiamo', 'Marcello Fondato', 1974);
    $film4 = new Movie('Natale a Miami', 'Neri Parenti', 2005);
    $film5 = new Movie('Spider-Man', 'Sam Raimi', 2002);

    // var_dump("Film");
    echo $film1->get_info();
    echo $film2->get_info();
    echo $film3->get_info();
    echo $film4->get_info();
    echo $film5->get_info();
?>