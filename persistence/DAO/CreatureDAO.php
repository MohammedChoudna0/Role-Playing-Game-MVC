<?php
require_once(dirname(__FILE__) . '/..\conf\PersistentManager.php');

class CreatureDAO {

    const CREATURE_TABLE = 'creature';

    private $conn = null;

    public function __construct() {
        $this->conn = PersistentManager::getInstance()->get_connection();
    }

    public function selectAll() {
        $query = "SELECT * FROM " . CreatureDAO::CREATURE_TABLE;
        $result = mysqli_query($this->conn, $query);
        $creatures = array();
        while ($creatureBD = mysqli_fetch_array($result)) {
            $creature = new Creature();
            $creature->setIdCreature($creatureBD["id"]);
            $creature->setName($creatureBD["name"]);
            $creature->setDescription($creatureBD["description"]);
            $creature->setAvatar($creatureBD["avatar"]);
            $creature->setAttackPower($creatureBD["attackPower"]);
            $creature->setLifeLevel($creatureBD["lifeLevel"]);
            $creature->setWeaponType($creatureBD["weaponType"]);
            array_push($creatures, $creature);
        }
        return $creatures;
    }

    public function insert($creature) {
        $query = "INSERT INTO " . CreatureDAO::CREATURE_TABLE .
            " (name, description, avatar, attackPower, lifeLevel, weaponType) VALUES(?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($this->conn, $query);
        $name = $creature->getName();
        $description = $creature->getDescription();
        $avatar = $creature->getAvatar();
        $attackPower = $creature->getAttackPower();
        $lifeLevel = $creature->getLifeLevel();
        $weaponType = $creature->getWeaponType();
        mysqli_stmt_bind_param($stmt, 'sssiis', $name, $description, $avatar, $attackPower, $lifeLevel, $weaponType);
        return $stmt->execute();
    }

    public function selectById($id) {
        $query = "SELECT name, description, avatar, attackPower, lifeLevel, weaponType FROM " . CreatureDAO::CREATURE_TABLE . " WHERE id=?";
        $stmt = mysqli_prepare($this->conn, $query);
        mysqli_stmt_bind_param($stmt, 'i', $id);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $name, $description, $avatar, $attackPower, $lifeLevel, $weaponType);
        $creature = new Creature();
        while (mysqli_stmt_fetch($stmt)) {
            $creature->setIdCreature($id);
            $creature->setName($name);
            $creature->setDescription($description);
            $creature->setAvatar($avatar);
            $creature->setAttackPower($attackPower);
            $creature->setLifeLevel($lifeLevel);
            $creature->setWeaponType($weaponType);
        }
        return $creature;
    }

    public function update($creature) {
        $query = "UPDATE " . CreatureDAO::CREATURE_TABLE .
            " SET name=?, description=?, avatar=?, attackPower=?, lifeLevel=?, weaponType=? WHERE id=?";
        $stmt = mysqli_prepare($this->conn, $query);
        $name = $creature->getName();
        $description = $creature->getDescription();
        $avatar = $creature->getAvatar();
        $attackPower = $creature->getAttackPower();
        $lifeLevel = $creature->getLifeLevel();
        $weaponType = $creature->getWeaponType();
        $id = $creature->getIdCreature();
        mysqli_stmt_bind_param($stmt, 'sssiisi', $name, $description, $avatar, $attackPower, $lifeLevel, $weaponType, $id);
        return $stmt->execute();
    }

    public function delete($id) {
        $query = "DELETE FROM " . CreatureDAO::CREATURE_TABLE . " WHERE id =?";
        $stmt = mysqli_prepare($this->conn, $query);
        mysqli_stmt_bind_param($stmt, 'i', $id);
        return $stmt->execute();
    }
}
?>
