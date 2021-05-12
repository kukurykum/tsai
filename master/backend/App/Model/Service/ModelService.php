<?php


namespace App\Model\Service;

use App\Database\Entity\EntityMapper;
use App\Model\Entity\ModelEntity;
use App\Model\Model\ModelModel;
use App\Model\Repository\ModelRepository;

class ModelService {
    const USER_ID = 1;
    private $modelRepository;
    /**
     * Model Repository constructor.
     */
    public function __construct() {
        $this->modelRepository = new modelRepository();
    }

    public function getModel($id) {
        $modelEntity = $this->modelRepository->getById($id);

        return EntityMapper::mapEntityToResponse($modelEntity, ModelModel::class);
    }

    public function addModel($model_id, $model_name) {
        $modelEntity = new ModelEntity();

        $modelEntity->setModelId($model_id)
            ->setName($model_name);

        $createdmodel = $this->modelRepository->save($modelEntity);

        return EntityMapper::mapEntityToResponse($createdmodel, ModelModel::class);
    }

    public function ismodelExists($model_id, $model_name) {
        return $this->modelRepository->ismodelExists($model_id, $model_name);
    }
}

// TODO sprawdzic nazwy z baza danych