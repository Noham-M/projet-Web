<?php
class Prestation
{
    private string $titre;
    private string $scene;
    private string $description;
    private string $image;

    public function __construct(string $titre, string $scene, string $description, string $image)
    {
        $this->setTitre($titre);
        $this->setScene($scene);
        $this->setDescription($description);
        $this->setImage($image);
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
    public function setImage(string $image)
    {
        if (empty($image) || !str_starts_with($image, "assets/img/")) {
            throw new InvalidArgumentException("l'image doit commencer par assets/img/ et ne doit pas être vide");
        }
        $this->image = $image;
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
    public function getImage(): string
    {
        return $this->image;
    }


}