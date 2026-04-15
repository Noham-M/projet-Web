<header>
    <section id="Titre">
        <img src="assets/img/question-svgrepo-com.svg" alt="Logo de l'événement">
        <h1>Journée tournoi LAN jeux-vidéo</h1>
        <?php if (isset($Utilisateur)) {
            echo '<p>Utilisateur : ' . $Utilisateur->getNom() . '</p>';
        } else {
            echo '<a class="SeConnecter" href="connexion.php">Se connecter ?</a>';
        } ?>
    </section>

    <nav>
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="ListeDesJoueur.php">Liste des joueurs</a></li>
            <li><a class="current" href="prestation.php">Prestations</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>
</header>