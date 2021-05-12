<?php


namespace App\User_List\Service;


use App\Database\Entity\EntityMapper;
use App\User_List\Entity\ListEntity;
use App\User_List\Model\ListModel;
use App\User_List\Repository\ListRepository;

class ListService {
    const USER_ID = 1;
    private $listRepository;
    /**
     * ListRepository constructor.
     */
    public function __construct() {
        $this->listRepository = new ListRepository();
    }

    public function getList($id) {
        $listEntity = $this->listRepository->getById($id);

        return EntityMapper::mapEntityToResponse($listEntity, ListModel::class);
    }

    public function addList($name, $userID) {
        $listEntity = new ListEntity();

        $listEntity->setListName($name)
            ->setUserId($userID);

        $createdList = $this->listRepository->save($listEntity);

        return EntityMapper::mapEntityToResponse($createdList, ListModel::class);
    }

    public function isListExists($name, $userID) {
        return $this->listRepository->isListExists($name, $userID);
    }
}