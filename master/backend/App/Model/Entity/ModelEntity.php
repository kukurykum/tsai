<?php


namespace App\Model\Entity;


use App\Database\Entity\Entity;


class ModelEntity extends Entity {
    private $id;
    private $name;

    /**
     * @return mixed
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }


}