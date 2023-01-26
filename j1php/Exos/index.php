<?php 

/// VARIABLES
// $nb=42;
// $str='42';
// $nbstr=($nb);

// echo $nb;
// echo $str;
// echo $nbstr;

// $nb_tab=[38,32,12,39.3,98.2];
// print_r($nb_tab);

// $animal= [
//     "species"=>"chien",
//     "name"=>"pedro",
//     "age"=>23
//     ];
    
// print_r($animal);

// $data=42;
// print_r($data);
// $float=(float)$data;
// print_r($float);

// $str=(string)$float;
// print_r($str)



// / BOUCLES

$animals = ["Chat", "Chien", "Lapin", "Souris"];

foreach($animals as $animal){
    echo "$animal\n";
    echo "<br>";
}

$numbers = [28, 32, 44, -67, 18, 24, -98];

foreach($numbers as $number){
    if($number < 0){
        echo $number;
        echo "<br>";
    }
}

$user = [
    "firstName" => "Barack",
    "lastName" => "Obama"
];

echo "Je suis {$user["firstName"]} {$user["lastName"]}, le 44ème président des USA..";
echo "<br>";


$users = [
    [
        "firstName" => "Mari",
        "lastName" => "Doucet"
    ],
    [
        "firstName" => "Hugues",
        "lastName" => "Froger"
    ]
];

foreach($users as $user){
    echo "{$user["firstName"]} {$user["lastName"]}";
    echo "<br>";
}

?>