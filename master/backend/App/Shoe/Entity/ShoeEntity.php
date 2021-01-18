<?php


namespace App\Shoe\Entity;


use App\Database\Entity\Entity;


class ShoeEntity extends Entity {
    private $id;
    private $list_id;
    private $brand_id;
    private $model_id;
    private $size;
    private $price;
    private $retail_price;
    private $amount;
    private $colorway;
    private $style;
    private $release_date;


    /**
     * @return mixed
     */
    public function getId() {
        return $this->id;
    }


    /**
     * @return mixed
     */
    public function getListId() {
        return $this->list_id;
    }

    /**
     * @param mixed $list_id
     * @return BrandEntity
     */
    public function setListId($list_id) {
        $this->list_id = $list_id;
        return $this;
    }


    /**
     * @return mixed
     */
    public function getBrandId() {
        return $this->brand_id;
    }

    /**
     * @param mixed $brand_id
     * @return BrandEntity
     */
    public function setBrandId($brand_id) {
        $this->brand_id = $brand_id;
        return $this;
    }


    /**
     * @return mixed
     */
    public function getModelId() {
        return $this->brand_id;
    }

    /**
     * @param mixed $model_id
     * @return BrandEntity
     */
    public function setModelId($model_id) {
        $this->model_id = $model_id;
        return $this;
    }


    /**
     * @return mixed
     */
    public function getSize() {
        return $this->size;
    }

    /**
     * @param mixed $size
     * @return BrandEntity
     */
    public function setSize($size) {
        $this->size = $size;
        return $this;
    }


    /**
     * @return mixed
     */
    public function getPrice() {
        return $this->price;
    }

    /**
     * @param mixed $price
     * @return BrandEntity
     */
    public function setPrice($price) {
        $this->price = $price;
        return $this;
    }


    /**
     * @return mixed
     */
    public function getRetailPrice() {
        return $this->price;
    }

    /**
     * @param mixed $retail_price
     * @return BrandEntity
     */
    public function setRetailPrice($retail_price) {
        $this->retail_price = $retail_price;
        return $this;
    }


    /**
     * @return mixed
     */
    public function getAmount() {
        return $this->amount;
    }

    /**
     * @param mixed $amount
     * @return BrandEntity
     */
    public function setAmount($amount) {
        $this->amount = $amount;
        return $this;
    }


    /**
     * @return mixed
     */
    public function getColorway() {
        return $this->colorway;
    }

    /**
     * @param mixed $colorway
     * @return BrandEntity
     */
    public function setColorway($colorway) {
        $this->colorway = $colorway;
        return $this;
    }


    /**
     * @return mixed
     */
    public function getStyle() {
        return $this->style;
    }

    /**
     * @param mixed $style
     * @return BrandEntity
     */
    public function setStyle($style) {
        $this->style = $style;
        return $this;
    }


    /**
     * @return mixed
     */
    public function getReleaseDate() {
        return $this->release_date;
    }

    /**
     * @param mixed $release_date
     * @return BrandEntity
     */
    public function setReleaseDate($release_date) {
        $this->release_date = $release_date;
        return $this;
    }

}