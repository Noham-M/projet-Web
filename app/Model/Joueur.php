<?php
require_once "Heure.php";
require_once "utilisateur.php";
class Joueur extends Utilisateur
{
    
    private string $pseudo;
    private Heure $Heure;
    private string $Photo;
    private string $scene;
    private string $description;

    public function __construct(string $nom, string $scene, string $image, int $heure,string $prenom, string $pseudo, string $Email, string $password, string $description)
    {
        parent::__construct($nom, $prenom , $Email,$password);
        $this->setScene($scene);
        $this->setDescription($description);
        $this->setHeure1($heure);
        $this->setImage($image);
        $this->setPseudo($pseudo);
        

    }
    public function setPseudo($pseudo)
    {
        if (empty($pseudo)) {
            throw new InvalidArgumentException("le pseudo ne peut pas être null ou vide");
        }
        $this->pseudo = $pseudo;
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
        $this->Heure = new Heure($heure);
    }
    public function setImage(string $image)
    {
        if (empty($image)) {
            throw new InvalidArgumentException("l'image ne peut pas être null ou vide");
        }
        $this->Photo = $image;
    }

    public function getheure(): Heure
    {
        return $this->Heure;
    }
    public function getScene(): string
    {
        return $this->scene;
    }
    public function getDescription(): string
    {
        return $this->description;
    }
    public function getImage(): string
    {
        return $this->Photo;
    }
    public function getPseudo(): string
    {
        return $this->pseudo;
    }
    


}
?>