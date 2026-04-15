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