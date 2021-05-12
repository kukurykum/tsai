<?php


namespace App\Brand\Service;

use App\Database\Entity\EntityMapper;
use App\Brand\Entity\BrandEntity;
use App\Brand\Model\BrandModel;
use App\Brand\Repository\BrandRepository;

class BrandService {
    const USER_ID = 1;
    private $brandRepository;
    /**
     * Brand Repository constructor.
     */
    public function __construct() {
        $this->brandRepository = new brandRepository();
    }

    public function getBrand($id) {
        $brandEntity = $this->brandRepository->getById($id);

        return EntityMapper::mapEntityToResponse($brandEntity, BrandModel::class);
    }

    public function addBrand($brand_id, $brand_name) {
        $brandEntity = new BrandEntity();

        $brandEntity->setBrandId($brand_id)
            ->setName($brand_name);

        $createdbrand = $this->brandRepository->save($brandEntity);

        return EntityMapper::mapEntityToResponse($createdbrand, BrandModel::class);
    }

    public function isbrandExists($brand_id, $brand_name) {
        return $this->brandRepository->isbrandExists($brand_id, $brand_name);
    }
}

// TODO sprawdzic nazwy z baza danych