<!DOCTYPE html>
<html>
<head>
</head>
<body>
<form action="utilisation_objet.php" method="POST">
    <h1>Nouvel Utilisateur</h1>
    <input type="text" placeholder="nom" name="nom" required>
    <input type="text" placeholder="prenom" name="prenom" required>
    <input type="text" placeholder="adresse" name="adresse" required>
    <input type="text" placeholder="code_postal" name="code_postal" required>
    <input type="text" placeholder="ville" name="ville" required>
    <input type="text" placeholder="telephone" name="telephone" required>
    <input type="text" placeholder="email" name="email" required>
    <input type="file" placeholder="photo" name="photo" required>
    <input type="password" placeholder="MDP" name="MDP" pattern="(?=.*\d)(?=.*[a-z])(?=.*[0-9])(?=.*[A-Z]).{8,}" title="1 min, 1 maj, 1 chif, 8 charactère min" required>
</form>
</body>
</html>