<?php

namespace App;

use App\User\Entity\UserEntity;
use App\User\Repository\UserRepository;

use App\Shoe\Entity\BrandEntity;
use App\Shoe\Repository\ShoeRepository;

class Application {

    public static function run() {
        echo "dziala legancko";
        $userRepository = new UserRepository();

        $userEntity = $userRepository->getById(1);

        $newUserEntity = new UserEntity();

        $newUserEntity->setUsername("uzytkownikae");
        $newUserEntity->setEmail("uzytkownik@2137.plae");
        $newUserEntity->setPassword("dupa123ae");
        $newUserEntity->setSalt("solnikotynowaea");
        $newUserEntity->setGroupId(1);
        $newUserEntity->setLastLogin(date('Y-m-d'));

        $newUserEntity = $userRepository->save($newUserEntity);

        $userRepository->save($newUserEntity);

        // ##

//        $shoeRepository = new BrandRepository();
//
//        $shoeEntity = $shoeRepository->getById(1);
//
//        $newShoeEntity = new BrandRepository();
//
//        $newShoeEntity->setListId(1);
//        $newShoeEntity->setBrandId(1);
//        $newShoeEntity->setModelId(1);
//        $newShoeEntity->setSize(9.5);
//        $newShoeEntity->setPrice(420);
//        $newShoeEntity->setRetailPrice(220);
//        $newShoeEntity->setAmount(1);
//        $newShoeEntity->setColorway("Bred");
//        $newShoeEntity->setStyle("nie pamietam ocb");
//        $newShoeEntity->setReleaseDate('2020-11-15');
//
//        $newShoeEntity = $shoeRepository->save($newShoeEntity);
//
//        $shoeRepository->save($newShoeEntity);
    }

}