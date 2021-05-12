<?php


namespace App\Shoe\Service;


use App\Database\Entity\EntityMapper;
use App\Shoe\Entity\ShoeEntity;
use App\Shoe\Model\ShoeModel;
use App\Shoe\Repository\ShoeRepository;

class ShoeService {
    const USER_ID = 1;
    private $shoeRepository;
    /**
     * ShoeRepository constructor.
     */
    public function __construct() {
        $this->shoeRepository = new ShoeRepository();
    }

    public function getShoe($id) {
        $shoeEntity = $this->shoeRepository->getById($id);

        return EntityMapper::mapEntityToResponse($shoeEntity, ShoeModel::class);
    }

    public function addShoe($list_id, $model_id, $brand_id, $size, $price, $retail_price, $amount, $colorway, $style, $release_date) {
        $shoeEntity = new ShoeEntity();

        $shoeEntity->setListId($list_id)
            ->setModelId($model_id)
            ->setBrandId($brand_id)
            ->setSize($size)
            ->setPrice($price)
            ->setRetailPrice($retail_price)
            ->setAmount($amount)
            ->setColorway($colorway)
            ->setStyle($style)
            ->setReleaseDate($release_date);

        $createdShoe = $this->shoeRepository->save($shoeEntity);

        return EntityMapper::mapEntityToResponse($createdShoe, ShoeModel::class);
    }

    public function isShoeExists($list_id, $model_id, $brand_id, $size, $price, $retail_price, $amount, $colorway, $style, $release_date) {
        return $this->shoeRepository->isShoeExists($list_id, $model_id, $brand_id, $size, $price, $retail_price, $amount, $colorway, $style, $release_date);
    }
}