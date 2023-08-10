// Étape 1 : Connexion à la base de données
$conn = mysqli_connect("localhost", "votre_nom_utilisateur", "votre_mot_de_passe", "nom_de_votre_base_de_données");
if (!$conn) {
    die("La connexion a échoué : " . mysqli_connect_error());
}

// Étape 2 : Vérification des données saisies par l'utilisateur
if (isset($_POST['search'])) {
    $search = $_POST['search'];
    // Étape 3 : Exécution de la requête de recherche
    $query = "SELECT * FROM votre_table WHERE champ LIKE '%$search%'";
    $result = mysqli_query($conn, $query);
}

// Étape 4 : Affichage des résultats de la recherche
if (isset($result)) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row['champ1'] . "<br>";
        echo $row['champ2'] . "<br>";
        // Ajoutez ici les autres champs que vous voulez afficher
    }
}