<?php
class Joueur
{
    private string $nom;
    private String $prenom;
    private String $Email;
    private String $passWord;
    private String $pseudo;
    private int $Heure1;
    private String $Photo;
    private string $scene;
    private string $description;

    public function __construct(string $nom, string $scene,String $image, int $heure1,String $prenom, String $pseudo, String $Email, String $password, string $description)
    {
        $this->setNom($nom);
        $this->setScene($scene);
        $this->setDescription($description);
        $this->setHeure1($heure1);
        $this->setImage($image);
        $this->setPseudo($pseudo);
        $this->setPassWord($password);
        $this->setPrenom($prenom);
        $this->setEmail($Email);
        
    }
    public function setPseudo($pseudo) {
        if (empty($pseudo)) {
            throw new InvalidArgumentException("le pseudo ne peut pas être null ou vide");
        }
        $this->pseudo = $pseudo;
    }

    public function setPassWord($passWord) {
        if (empty($passWord)) {
            throw new InvalidArgumentException("le mdp ne peut pas être null ou vide");
        }
        $this->passWord = $passWord;
    }
    public function setPrenom($prenom) {
        if (empty($prenom)) {
            throw new InvalidArgumentException("le prenom ne peut pas être null ou vide");
        }
        $this->prenom = $prenom;
    }
    public function setEmail($Email) {
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
        if ($heure < 8 || $heure > 15) {
            throw new InvalidArgumentException("l'heure doit être entre 8 et 15");
        }
        $this->Heure1 = $heure;
    }
    public function setImage(String $image) {
        if(empty($image)) {
            throw new InvalidArgumentException("l'image ne peut pas être null ou vide");
        }
        $this->Photo = $image;
    }

    public function getheure1(): int
    {
        return $this->Heure1;
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
    public function getImage(): String {
        return $this->Photo;
    }
    public function getPrenom(): String {
        return $this->prenom;
    }
    public function getEmail(): String {
        return $this->Email;
    }
    public function getPseudo(): String {
        return $this->pseudo;
    }
    public function getPassWord(): String {
        return $this->passWord;
    }


}
?>