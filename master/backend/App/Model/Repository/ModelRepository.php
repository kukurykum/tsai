<?php


namespace App\Model\Repository;


use App\Database\Repository\Repository;

class ModelRepository extends Repository {

    protected function getEntityName() {
        return "App\User\Entity\ShoeEntity";
    }

    protected function getTableName() {
        return "model";
    }
}
