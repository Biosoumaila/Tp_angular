
  <title>Ajouter un etudiant</title>
</head>
<body  class="max-w-6xl mx-auto sm:px-6 lg:px-8">
  <div class="row">
    <h1>Ajouter un etudiant</h1>
    <hr>
    <input type="search" name="Rechercher" id=""><label for="rechercher">Rechercher</label>
    <hr>
    <form action="afficher" method="post">
      <div class="form-group">
        <label for="nom">Nom</label>
        <input type="text" class= "form-control" name="nom" id="nom">
      </div>
      <div class="form-group">
        <label for="prenom">prenom</label>
        <input type="text" class= "form-control" name="prenom" id="prenom">
      </div>

      <label for="sexe">Sexe</label>
        <select name="sexe" id="sexe">
          <option value="M">Masculin</option>
          <option value="F">Feminin</option>
        </select>      

      <div class="form-group">
        <label for="matricule">Matricule:</label>
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
echo  $matricule;
?>
    <div class="form-group">
      <label for="filere">Filiere</label>
        <select name="filiere" id="filiere">
          <option value="AL">Architecture</option>
          <option value="src">securite</option>
          <option value="R">reseau</option>
        </select>
      </div>
      <input type="button" value="Enregistrer">
    </form>
  </div>
</body>