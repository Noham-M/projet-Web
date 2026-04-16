<?php
require_once "Heure.php";
class Joueur
{
    private string $nom;
    private string $prenom;
    private string $Email;
    private string $passWord;
    private string $pseudo;
    private Heure $Heure;
    private string $Photo;
    private string $scene;
    private string $description;

    public function __construct(string $nom, string $scene, string $image, int $heure, string $prenom, string $pseudo, string $Email, string $password, string $description)
    {
        $this->setNom($nom);
        $this->setScene($scene);
        $this->setDescription($description);
        $this->setHeure1($heure);
        $this->setImage($image);
        $this->setPseudo($pseudo);
        $this->setPassWord($password);
        $this->setPrenom($prenom);
        $this->setEmail($Email);

    }
    public function setPseudo($pseudo)
    {
        if (empty($pseudo)) {
            throw new InvalidArgumentException("le pseudo ne peut pas être null ou vide");
        }
        $this->pseudo = $pseudo;
    }

    public function setPassWord($passWord)
    {
        if (empty($passWord)) {
            throw new InvalidArgumentException("le mdp ne peut pas être null ou vide");
        }
        $this->passWord = $passWord;
    }
    public function setPrenom($prenom)
    {
        if (empty($prenom)) {
            throw new InvalidArgumentException("le prenom ne peut pas être null ou vide");
        }
        $this->prenom = $prenom;
    }
    public function setEmail($Email)
    {
        if (empty($Email)) {
            throw new InvalidArgumentException("l'email ne peut pas être null ou vide");
        }
        $this->Email = $Email;
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
    public function getName(): string
    {
        return $this->nom;
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
    public function getPrenom(): string
    {
        return $this->prenom;
    }
    public function getEmail(): string
    {
        return $this->Email;
    }
    public function getPseudo(): string
    {
        return $this->pseudo;
    }
    public function getPassWord(): string
    {
        return $this->passWord;
    }


}
?>