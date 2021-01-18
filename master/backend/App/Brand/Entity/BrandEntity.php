<?php


namespace App\Brand\Entity;


use App\Database\Entity\Entity;


class BrandEntity extends Entity {
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