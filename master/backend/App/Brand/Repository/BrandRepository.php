<?php


namespace App\Brand\Repository;


use App\Database\Repository\Repository;

class BrandRepository extends Repository {

    protected function getEntityName() {
        return "App\User\Entity\ShoeEntity";
    }

    protected function getTableName() {
        return "brand";
    }
}
