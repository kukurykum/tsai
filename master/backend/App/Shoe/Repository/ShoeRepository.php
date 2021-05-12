<?php


namespace App\Shoe\Repository;


use App\Database\Repository\Repository;

class ShoeRepository extends Repository {

    protected function getEntityName() {
        return "App\User\Entity\ShoeEntity";
    }

    protected function getTableName() {
        return "shoe_info";
    }

    public function isShoeExists($list_id, $model_id, $brand_id, $size, $price, $retail_price, $amount, $colorway, $style, $release_date) {
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
