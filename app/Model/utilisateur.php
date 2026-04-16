<?php
class Utilisateur
{
    private string $nom;
    private string $prenom;
    private string $Email;
    private string $passWord;

    public function __construct(string $nom, string $prenom, string $Email, string $password)
    {
        $this->setNom($nom);
        $this->setPassWord($password);
        $this->setPrenom($prenom);
        $this->setEmail($Email);
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
    public function getName(): string
    {
        return $this->nom;
    }
     public function getPrenom(): string
    {
        return $this->prenom;
    }
    public function getEmail(): string
    {
        return $this->Email;
    }
    public function getPassWord(): string
    {
        return $this->passWord;
    }
}
?>