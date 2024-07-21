<?php
if(isset($_POST['Nom'])&&
isset($_POST['Prenom'])&&
isset($_POST['Numero'])&&
isset($_POST['E-mail'])&&
isset($_POST['Sexe'])&&
isset($_POST['Password'])){

    $ns = "localhost";
    $utilisateur = "root";
    $mdp = "";
    $bdd = "bahn";
    $con = mysqli_conectt(&ns, &utilisateur,$mdp,$bdd);
    $req = mysqli_query($con, "select *from monsite");
    // echo $_POST['Nom'];
    // echo $_POST['Prenom'];
    // echo $_POST['Numero'];
    // echo $_POST['E-mail'];
    // echo $_POST['Sexe'];
    // echo $_POST['Password'];
}
?>