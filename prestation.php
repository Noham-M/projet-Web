<?php
class Prestation
{
    private string $titre;
    private string $scene;
    private string $description;

    public function __construct(string $titre, string $scene, string $description)
    {
        $this->setTitre($titre);
        $this->setScene($scene);
        $this->setDescription($description);
    }
    public function setTitre(string $titre)
    {
        if (empty($titre)) {
            throw new InvalidArgumentException("le titre ne peut pas être null ou vide");
        }
        $this->titre = $titre;
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
            throw new InvalidArgumentException("la déscription ne peut pas être null ou vide");
        }
        $this->description = $description;
    }
    public function getTitre(): string
    {
        return $this->titre;
    }

    public function getScene(): string
    {
        return $this->scene;
    }

    public function getDescription(): string
    {
        return $this->description;
    }


}
if ($_SERVER['REQUEST_METHOD'] === "GET") {
    $actual = $_GET['Lieu'] ?? "";
}
$exemplePresta = [
    new Prestation("6v6 Overwatch Qp", "Overwatch", "2 ou 3 match rapide en 6v6 sur overwatch"),
    new Prestation("Mini tournoi de 4 équipe", "valorant", "4 équipe de 5 s'affronte en B03 sur valorant"),
    new Prestation("Mini tournoi de 4 équipe", "csgo", "4 équipe de 5 s'affronte en B03 sur CS2"),
    new Prestation("presentation jeu de l'année", "Zen", "présentation des jeu de l'année 2025"),
    new Prestation("Mini Tournoi 5v5", "Overwatch", "Mini tournoi en 5v5 sur Overwatch")
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

        <h2>Liste des prestations</h2>
        <form action="#" method="GET" class="filter">
            <fieldset>
                <legend>Filtrer les activités</legend>
                <div class="filterGroup">
                    <label for="Lieu">Choisissez une scène</label>
                    <select name="Lieu" id="Lieu">
                        <option value="">Toutes les scènes</option>
                        <option value="valorant">Scène Valorant</option>
                        <option value="csgo">Scène Counter-Strike</option>
                        <option value="Zen">Espace détente</option>
                        <option value="Overwatch">Scène Overwatch</option>
                    </select>
                </div>
                <div class="filterGroup">
                    <label for="Creneau">Choisissez une heure</label>
                    <select name="Creneau" id="Creneau">
                        <option value="">Toutes les heures</option>
                        <option value="8h">8h-10h</option>
                        <option value="10h">10h-12h</option>
                        <option value="12h">12h-13h</option>
                        <option value="13h">13h-15h</option>
                        <option value="15h">15h-18h</option>
                    </select>
                </div>

                <button type="submit">Rechercher</button>
            </fieldset>
        </form>

        <div class="ListeVignette">
            <?php
            foreach ($exemplePresta as $value) {
                echo "<a href='prestationEx.php' class='vignette'>
                <img src='img/video-games-1557358_1280.jpg' alt='Photo de manette'>
                <h3>" . $value->getTitre() . "</h3>
                <p><strong>Scène : </strong>" . $value->getScene() . "</p>
                <p>" . $value->getDescription() . "</p>
                </a>";


            } ?>
        </div>
    </main>
    <?php
    require_once "app/view/footer.php";
    ?>
</body>

</html>