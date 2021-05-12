<?php


namespace App\Shoe\Controller;

use App\Router\RestBodyReader;
use App\Serializer\JsonSerializer;
use App\Shoe\Model\ShoeRequest;
use App\Shoe\Service\ShoeService;

/**
 * @Controller(path="/list/add")
 */
class ShoeController {
    private $shoeRequest;

    /**
     * ShoeController constructor.
     */
    public function __construct(){
        $this->shoeService = new shoeService();
    }

    /**
     * @Action(method="POST")
     */
    public
    function addShoe() {
        /** @var ShoeRequest $shoeRequest */
        $shoeRequest = RestBodyReader::readRequestBody(ShoeRequest::class);

        $createdShoe = $this->shoeRequest->addList($shoeRequest->getModelId(), $shoeRequest->getBrandId());

        echo JsonSerializer::getInstance()->serialize($createdShoe, 'json');
    }

    /**
     * @Action(method="GET", path="/{id}")
     */
    public
    function getShoe($id) {
        echo JsonSerializer::getInstance()->serialize($this->shoeService->getShoe($id), 'json');
    }

    /**
     * @Action(method="PUT", path="/{id}")
     */
    public
    function updateShoe($id) {
        echo sprintf("Updated shoe with id: %s", $id);
    }

    /**
     * @Action(method="DELETE", path="/{id}")
     */
    public
    function deleteShoe($id) {
        echo sprintf("Deleted shoe with id: %s", $id);
    }
}