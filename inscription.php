<?php
require_once "header.php";
require_once "config/dbconnection.php";

$pdo = DbConnection::getPdo();

$query = $pdo->query('SELECT * FROM licence');
$licence = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<form action= "validation.php" method="post">
    <label for ="firstname">Nom : </label>
    <input type="text" id="firstname" name="firstname" />

    <label for ="lastname">Prénom : </label>
    <input type="text" id="lastname" name="lastname" />

    <label for ="team">Nom de l'équipe : </label>
    <input type="text" id="team" name="team" />

    <label for ="car">Choix du véhicule : </label>
    <select id="car" name="car">
        <option></option>
        <option value="aston">AMR V8 Vantage GT3</option>
        <option value="audi">Audi R8 LMS evo</option>
        <option value="bentley">Bentley Continental GT3</option>
        <option value="bmw_four">BMW M4 GT3</option>
        <option value="bmw_six">BMW M6 GT3</option>
        <option value="ferrari">Ferrari 488 GT3</option>
        <option value="ford">Ford Mustang GT3</option>
        <option value="honda">Honda NSX GT3 Evo</option>
        <option value="lamborghini">Lamborghini Huracan GT3 Evo</option>
        <option value="lexus">Lexus RC F GT3</option>
        <option value="mclaren">McLaren 720s GT3 Evo</option>
        <option value="mercedes">Mercedes-AMG GT3</option>
        <option value="nissan">Nissan GT-R Nismo GT3</option>
        <option value="porsche">Porsche 991II GT3 R</option>
    </select>

    <button type="submit">S'inscrire</button>

    </form>

    


