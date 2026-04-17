<?php
require_once "Heure.php";
require_once "Joueur.php";
require_once "prestation.php";
class Programmation
{
    private Heure $heure;
    private string $scene;
    private Joueur $joueur;
    private Prestation $prestation;
    public function __construct(Heure $heure, string $scene, Joueur $joueur, Prestation $prestation)
    {

    }
    public function setHeure(int $heure)
    {
        $this->heure = new Heure($heure);
    }

    public function setScene(string $scene)
    {
        if (empty($scene)) {
            throw new InvalidArgumentException("scene ne peut pas être vide");
        }
        $this->scene = $scene;
    }
    public function setJoueur(Joueur $joueur) {
        $this->joueur = new Joueur();
    }
    public function setPrestation(Prestation $prestation) {
        $this->prestation = new Prestation();
    }
    public function getHeure():Heure {
        return $this->heure;
    }
    public function getScene():string {
        return $this->scene;
    }
    public function getJoueur():Joueur {
        return $this->joueur;
    }
    public function getPrestation():Prestation {
        return $this->prestation;
    }
        
    }

}
?> 