<?php class Creature {
    private $idCreature;
    private $name;
    private $description;
    private $avatar;
    private $attackPower;
    private $lifeLevel;
    private $weaponType;

    public function __construct() {
    }

    public function getIdCreature() {
        return $this->idCreature;
    }

    public function getName() {
        return $this->name;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getAvatar() {
        return $this->avatar;
    }

    public function getAttackPower() {
        return $this->attackPower;
    }

    public function getLifeLevel() {
        return $this->lifeLevel;
    }

    public function getWeaponType() {
        return $this->weaponType;
    }

    public function setIdCreature($idCreature) {
        $this->idCreature = $idCreature;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function setAvatar($avatar) {
        $this->avatar = $avatar;
    }

    public function setAttackPower($attackPower) {
        $this->attackPower = $attackPower;
    }

    public function setLifeLevel($lifeLevel) {
        $this->lifeLevel = $lifeLevel;
    }

    public function setWeaponType($weaponType) {
        $this->weaponType = $weaponType;
    }

    public function creatureToHTML($isPrivate = false) {
        $html = '<div class="col-md-4 " >'; 
        $html .= '<div class="card mb-4 ">'; 
        $html .= '<img src="' . $this->getAvatar() . '" class="card-img-top " alt="Creature Avatar" style="height:250px"> ';
        $html .= '<div class="card-block">';
        $html .= '<h2 class="card-title">' . $this->getName() . '</h2>';
        $html .= '<p class="card-text description">' . $this->getDescription() . '</p>';
        $html .= '<p class="card-text"><strong>Attack Power:</strong> ' . $this->getAttackPower() . '</p>';
        $html .= '<p class="card-text"><strong>Life Level:</strong> ' . $this->getLifeLevel() . '</p>';
        $html .= '<p class="card-text"><strong>Weapon Type:</strong> ' . $this->getWeaponType() . '</p>';
        $html .= '</div>';
        $html .= '<div class="btn-group card-footer" role="group">';
    
        if ($isPrivate) {
            $html .= '<a type="button" class="btn btn-secondary" href="creature/detail.php?id=' . $this->getIdCreature() . '">Detalles</a>';
            $html .= '<a type="button" class="btn btn-success" href="creature/edit.php?id=' . $this->getIdCreature() . '">Modificar</a>';
            $html .= '<a type="button" class="btn btn-danger" href="../../controllers/creature/deleteController.php?id=' . $this->getIdCreature() . '">Borrar</a>';
        } else {
            $html .= '<a type="button" class="btn btn-secondary" href="../../../../app/private/views/creature/detail.php?id=' . $this->getIdCreature() . '">Detalles</a>';
        }
    
        $html .= '</div>';
        $html .= '</div>';
        $html .= '</div>';
    
        return $html;
    }
    
}
