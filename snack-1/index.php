<?php 
    $match = [
        [
            "homeTeam" => "Milano-Basket",
            "awayTeam" => "Juventus-Basket",
            "homePoints" => "80",
            "awayPoints" => "44"
        ],
        [
            "homeTeam" => "Parma-Basket",
            "awayTeam" => "Bologna-Basket",
            "homePoints" => "65",
            "awayPoints" => "99"
        ],
        [
            "homeTeam" => "Madrid-Basket",
            "awayTeam" => "Manchester-Basket",
            "homePoints" => "78",
            "awayPoints" => "112"
        ],
        [
            "homeTeam" => "Genoa-Basket",
            "awayTeam" => "Internazionale-Basket",
            "homePoints" => "80",
            "awayPoints" => "44"
        ]
    ];
    for($i=0; $i < count($match); $i++){
        echo $match[$i]["homeTeam"] . " - " . $match[$i]["awayTeam"] . " | " .  $match[$i]["homePoints"] . " - " . $match[$i]["awayPoints"] . "</br>";
    }
?>