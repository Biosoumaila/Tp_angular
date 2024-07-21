<?php
function genererMatricule($longueur) {
    $caracteres = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $matricule = '';
    $max = strlen($caracteres) - 1;
    
    for ($i = 0; $i < 9; $i++) {
        $matricule .= $caracteres[rand(0, $max)];
    }
    
    return $matricule;
}
$matricule = genererMatricule(8);
echo "Matricule généré : $matricule";
?>