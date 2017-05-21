<?php
// Array with names
$a[] = "Anna";
$a[] = "Alisson";
$a[] = "Adriano";
$a[] = "Alexandre";
$a[] = "Bruna";
$a[] = "Bruno";
$a[] = "Bernardo";
$a[] = "Cintia";
$a[] = "Cassio";
$a[] = "Cristina";
$a[] = "Dede";
$a[] = "Diana";
$a[] = "Delma";
$a[] = "Evelin";
$a[] = "Elson";
$a[] = "Eduardo";
$a[] = "Fernando";
$a[] = "Fabricia";
$a[] = "Giovanni";
$a[] = "Gustavo";
$a[] = "Giovana";
$a[] = "Hugo";
$a[] = "Izabela";
$a[] = "Irineu";
$a[] = "Iury";
$a[] = "Icaro";
$a[] = "Jose";
$a[] = "João";
$a[] = "Joyce";
$a[] = "Juliana";
$a[] = "Katy";
$a[] = "Kaio";
$a[] = "Liza";
$a[] = "Luan";
$a[] = "Lucas";
$a[] = "Luiz";
$a[] = "Leonardo";
$a[] = "Leandro";
$a[] = "Luciana";
$a[] = "Laura";
$a[] = "Matheus";
$a[] = "Mateus";
$a[] = "Marco";
$a[] = "Melissa";
$a[] = "Nikollas";
$a[] = "Noyara";
$a[] = "Neymar";
$a[] = "Orivaldo";
$a[] = "Pedro";
$a[] = "Queijo";
$a[] = "Paulo";
$a[] = "Raquel";
$a[] = "Renan";
$a[] = "Rita";
$a[] = "Silvana";
$a[] = "Simone";
$a[] = "Silvio";
$a[] = "Torival";
$a[] = "Totonho";
$a[] = "Thamiris";
$a[] = "Unity";
$a[] = "Vivian";
$a[] = "Vitor";
$a[] = "Vitoria";
$a[] = "Vinicius";
$a[] = "Wallace";
$a[] = "Woleston";
$a[] = "Wellington";
$a[] = "Weber";
$a[] = "Xuxa";
$a[] = "Yago";
$a[] = "Zilkerson";

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?> 