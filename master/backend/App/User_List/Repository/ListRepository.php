<?php


namespace App\User_List\Repository;


use App\Database\Repository\Repository;
use App\User_List\Entity\ListEntity;

class ListRepository extends Repository {

    protected function getEntityName() {
        return "App\User\Entity\ShoeEntity";
    }

    public function getById($id) {
//        $query = $this->prepare("Select * from " . $this->getTableName() . " where id=:id");
//
//        $query->execute(array(
//            ":id" => $id
//        ));
//
//        return $query->fetch();
        return "id";
    }

    protected function getTableName() {
        return "list";
    }

    public function isListExists($username, $password) {
//        $query = $this->prepare("Select * from " . $this->getTableName() . " where username=:username");
//
//        $query->execute(array(
//            ":username" => $username
//        ));
//
//        /** @var ListEntity $userEntity */
//        $userEntity = $query->fetch();
//
//        if (empty($userEntity)) {
//            return false;
//        }
//
//        $encodedUserPassword = sha1($password . $userEntity->getSalt());
//
//        return $encodedUserPassword == $userEntity->getPassword();
        return "nie";
    }
}
