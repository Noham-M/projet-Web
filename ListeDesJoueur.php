<?php
class Joueur {
    private String $nom;
    private int $Heure;
    private String $scene;
    private String $description;

     public function __construct(String $nom, String $scene, int $heure, String $description) {
        $this->setNom($nom);
        $this->setScene($scene);
        $this->setDescription($description);
    }

    public function setNom(String $nom) {
        if (empty($nom)) {
            throw new InvalidArgumentException("le nom ne peut pas être null ou vide");
        }
        $this->nom;
    }

     public function setScene(String $scene) {
        if (empty($scene)) {
            throw new InvalidArgumentException("la scene ne peut pas être null ou vide");
        }
        $this->nom;
    }

     public function setDescription(String $description) {
        if (empty($description)) {
            throw new InvalidArgumentException("la description ne peut pas être null ou vide");
        }
        $this->nom;
    }

    public function setHeure(int $heure) {
        if ($heure < 8 || $heure > 15) {
            throw new InvalidArgumentException("l'heure doit être entre 8 et 15");
        }
        $this->Heure = $heure;
    }

}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Journée Tournoi LAN jeux-vidéo</title>
    <link rel="stylesheet" href="css/Style.css">
</head>


<body>
    <?php
    require_once "app/view/header.php";
    ?>
    <main>
        <h2>Liste des joueurs</h2>
        <form action="ListeDesJoueur.php" method="GET" class="filter">

            <fieldset>
                <legend>Filtrer les participants</legend>
                <div class="filterGroup">
                <label for="scene">Choisissez une scène</label>
                <select name="scene" id="scene">
                    <option value="">Toutes les scènes</option>
                    <option value="valorant">Scène Valorant</option>
                    <option value="csgo">Scène Counter-Strike</option>
                    <option value="Zen">Espace détente</option>
                    <option value="Overwatch">Scène Overwatch</option>
                </select>
                </div>
                <div class="filterGroup">
                <label for="Heure">Choisissez une heure</label>
                <select name="Heure" id="Heure">
                    <option value="">Toutes les heures</option>
                    <option value="8h">8h-10h</option>
                    <option value="10h">10h-12h</option>
                    <option value="12h">12h-13h</option>
                    <option value="13h">13h-15h</option>
                    <option value="15h">15h-18h</option>
                </select>
                </div>

                <button type="submit" id="bouttonFiltre">Rechercher</button>

            </fieldset>
        </form>

        <div class="ListeVignette">
            <a href="Joueur.php" class="vignette">

                <img src="img/racing-6249392_1280.jpg" alt="Portrait de Jean Permatête">
                <h3>Jean Permatête</h3>

                <p><strong>Présence :</strong> 8h-10h (Valorant) et 12h-13h (Espace Zen).</p>
                <p>Petit joueur de Valorant venant de Liège, c'est l'un des meilleurs supports du pays.</p>
            </a>
            <a href="Joueur.php" class="vignette">

                <img src="img/racing-6249392_1280.jpg" alt="Portrait de Jean Permatête">
                <h3>Jean Permatête</h3>

                <p><strong>Présence :</strong> 8h-10h (Valorant) et 12h-13h (Espace Zen).</p>
                <p>Description du joueur...</p>
            </a>
            <a href="Joueur.php" class="vignette">

                <img src="img/racing-6249392_1280.jpg" alt="Portrait de Jean Permatête">
                <h3>Jean Permatête</h3>

                <p><strong>Présence :</strong> 8h-10h (Valorant) et 12h-13h (Espace Zen).</p>
                <p>Description du joueur...</p>
            </a>
            <a href="Joueur.php" class="vignette">

                <img src="img/racing-6249392_1280.jpg" alt="Portrait de Jean Permatête">
                <h3>Jean Permatête</h3>

                <p><strong>Présence :</strong> 8h-10h (Valorant) et 12h-13h (Espace Zen).</p>
                <p>Description du joueur...</p>
            </a>
            <a href="Joueur.php" class="vignette">

                <img src="img/racing-6249392_1280.jpg" alt="Portrait de Jean Permatête">
                <h3>Jean Permatête</h3>

                <p><strong>Présence :</strong> 8h-10h (Valorant) et 12h-13h (Espace Zen).</p>
                <p>Description du joueur...</p>
            </a>
            <a href="Joueur.php" class="vignette">

                <img src="img/racing-6249392_1280.jpg" alt="Portrait de Jean Permatête">
                <h3>Jean Permatête</h3>

                <p><strong>Présence :</strong> 8h-10h (Valorant) et 12h-13h (Espace Zen).</p>
                <p>Description du joueur...</p>
            </a>
            <a href="Joueur.php" class="vignette">

                <img src="img/racing-6249392_1280.jpg" alt="Portrait de Jean Permatête">
                <h3>Jean Permatête</h3>

                <p><strong>Présence :</strong> 8h-10h (Valorant) et 12h-13h (Espace Zen).</p>
                <p>Description du joueur...</p>
            </a>
            <a href="Joueur.php" class="vignette">

                <img src="img/racing-6249392_1280.jpg" alt="Portrait de Jean Permatête">
                <h3>Jean Permatête</h3>

                <p><strong>Présence :</strong> 8h-10h (Valorant) et 12h-13h (Espace Zen).</p>
                <p>Description du joueur...</p>
            </a>

        </div>
    </main>
    <?php
    require_once "app/view/footer.php";
    ?>
</body>

</html>