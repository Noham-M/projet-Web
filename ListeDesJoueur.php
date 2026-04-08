<?php
class Joueur
{
    private string $nom;
    private int $Heure1;
    private String $alt;
    private String $Photo;
    private int $Heure2;
    private string $scene;
    private string $description;

    public function __construct(string $nom, string $scene,String $alt,String $image, int $heure1, int $heure2, string $description)
    {
        $this->setNom($nom);
        $this->setScene($scene);
        $this->setDescription($description);
        $this->setHeure1($heure1);
        $this->setHeure2($heure2);
        $this->setImage($image);
        $this->setAlt($image);
    }

    public function setNom(string $nom)
    {
        if (empty($nom)) {
            throw new InvalidArgumentException("le nom ne peut pas être null ou vide");
        }
        $this->nom = $nom;
    }

    public function setScene(string $scene)
    {
        if (empty($scene)) {
            throw new InvalidArgumentException("la scene ne peut pas être null ou vide");
        }
        $this->scene = $scene;
    }

    public function setDescription(string $description)
    {
        if (empty($description)) {
            throw new InvalidArgumentException("la description ne peut pas être null ou vide");
        }
        $this->description = $description;
    }

    public function setHeure1(int $heure)
    {
        if ($heure < 8 || $heure > 15) {
            throw new InvalidArgumentException("l'heure doit être entre 8 et 15");
        }
        $this->Heure1 = $heure;
    }

    public function setHeure2(int $heure)
    {
        if ($heure < 8 || $heure > 15) {
            throw new InvalidArgumentException("l'heure doit être entre 8 et 15");
        }
        $this->Heure2 = $heure;
    }

    public function setImage(String $image) {
        if(empty($image)) {
            throw new InvalidArgumentException("l'image ne peut pas être null ou vide");
        }
        $this->Photo = $image;
    }
    public function setAlt(String $alt) {
        if(empty($alt)) {
            throw new InvalidArgumentException("le alt ne peut pas être null ou vide");
        }
        $this->alt = $alt;
    }
    public function getheure1(): int
    {
        return $this->Heure1;
    }
    public function getheure2(): int
    {
        return $this->Heure2;
    }
    public function getName(): string
    {
        return $this->nom;
    }
    public function getScense(): string
    {
        return $this->scene;
    }
    public function getDescription(): string
    {
        return $this->description;
    }
    public function getImage(): String {
        return $this->Photo;
    }
    public function getAlt(): String {
        return $this->alt;
    }


}
$allPlayer = [
    new Joueur("jean permatete", "valorant","'Portrait de Jean Permatête'","'img/racing-6249392_1280.jpg'", 8, 10, "Petit joueur de Valorant venant de Liège, c'est l'un des meilleurs supports du pays."),
    new Joueur("Eva mChercherUneBierre", "csgo","'Pas d'image trouvée'","'img/question-svgrepo-com.svg'", 10, 12, "joueuse competitive elle est la pour révolutionner l'art de l'awp sur csgo"),
    new Joueur("JuJuCactus", "Overwatch","'Portrait de Jean Permatête'","'img/racing-6249392_1280.jpg'", 13, 15, "Joueuse Dps sur Overwatch, elle est venue parce qu'il manquait des joueurs"),
    new Joueur("XxGalaxyDestroyerxX", "Overwatch","'Portrait de Jean Permatête'","'img/racing-6249392_1280.jpg'", 13, 15, "Joueur support sur overwatch il est la pour concurencer tout les support de ce tournoi")
];
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
            <?php
            foreach ($allPlayer as $value) {
                echo "<a href='Joueur.php' class='vignette'>

                <img src=" . $value->getImage() . "alt=" . $value ->getAlt() . ">
                <h3>" . $value->getName() . "</h3>

                <p><strong>Présence :</strong>" . $value->getheure1() . "h" . $value->getheure2() . "h  (" . $value->getScense() . ") .</p>
                <p>" . $value->getDescription() . "</p>
            </a>";
            }
            ?>

        </div>
    </main>
    <?php
    require_once "app/view/footer.php";
    ?>
</body>

</html>