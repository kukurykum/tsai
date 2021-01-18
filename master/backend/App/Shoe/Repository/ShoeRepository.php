<?php


namespace App\User\Repository;


use App\Database\Repository\Repository;

class ShoeRepository extends Repository {

    protected function getEntityName() {
        return "App\User\Entity\ShoeEntity";
    }

    protected function getTableName() {
        return "shoe_info";
    }
}
