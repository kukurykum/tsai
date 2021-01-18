<?php


namespace App\User_List\Repository;


use App\Database\Repository\Repository;

class ListRepository extends Repository {

    protected function getEntityName() {
        return "App\User\Entity\ShoeEntity";
    }

    protected function getTableName() {
        return "list";
    }
}
