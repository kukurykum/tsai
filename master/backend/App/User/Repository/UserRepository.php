<?php


namespace App\User\Repository;


use App\Database\Repository\Repository;

class UserRepository extends Repository {

    protected function getEntityName() {
        return "App\User\Entity\UserEntity";
    }

    protected function getTableName() {
        return "user";
    }
}
