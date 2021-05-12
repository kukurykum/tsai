<?php


namespace App\Brand\Controller;

use App\Router\RestBodyReader;
use App\Serializer\JsonSerializer;
use App\Brand\Model\BrandRequest;
use App\Brand\Service\BrandService;

/**
 * @Controller(path="/list/add")
 */
class BrandController {
    private $brandRequest;

    /**
     * BrandController constructor.
     */
    public function __construct(){
        $this->brandService = new BrandService();
    }

    /**
     * @Action(method="POST")
     */
    public
    function addBrand() {
        /** @var BrandRequest $brandRequest */
        $brandRequest = RestBodyReader::readRequestBody(BrandRequest::class);

        $createdBrand = $this->brandRequest;

        echo JsonSerializer::getInstance()->serialize($createdBrand, 'json');
    }

    /**
     * @Action(method="GET", path="/{id}")
     */
    public
    function getBrand($id) {
        echo JsonSerializer::getInstance()->serialize($this->brandService->getBrand($id), 'json');
    }

    /**
     * @Action(method="PUT", path="/{id}")
     */
    public
    function updateBrand($id) {
        echo sprintf("Updated brand with id: %s", $id);
    }

    /**
     * @Action(method="DELETE", path="/{id}")
     */
    public
    function deleteBrand($id) {
        echo sprintf("Deleted brand with id: %s", $id);
    }
}