<?php
require_once "header.php";
require_once "config/dbconnection.php";

$pdo = DbConnection::getPdo();
$query = $pdo->query('SELECT * FROM licence');
$licence = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<body>
    <h1>Bienveue à la LoGP</h1>
    <!-- section inscription -->
    <section> 
        <a href="inscription.php">
            <button type="submit">
                <h2>inscription licencié et remplaçant pour le championnat</h2>
            </button>
        </a>
    </section>
    
    <section id="ranking"> <!-- section classement -->
        <h2>Classement individuel</h2>
        <h2>Classement par équipe</h2>
    </section>

    <section id="registered"> <!-- section pilotes inscrits -->
        <h2>Pilotes inscrits</h2>
        
        <?php foreach ($licence as $valeur) { ?>
            <p><?php echo $valeur['firstname'] ?></p>
            <p></p>
            <p></p>
            <p></p> <?php } ?>
    </section>

    <section id="calendar">
        <h2>Calendrier</h2>
    </section>

    <section id="penalty">
        <h2>Pénalités</h2>
    </section>


</body>
</html>