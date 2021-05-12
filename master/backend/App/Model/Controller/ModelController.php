<?php


namespace App\Model\Controller;

use App\Router\RestBodyReader;
use App\Serializer\JsonSerializer;
use App\Model\Model\ModelRequest;
use App\Model\Service\ModelService;

/**
 * @Controller(path="/list/add")
 */
class ModelController {
    private $modelRequest;

    /**
     * ModelController constructor.
     */
    public function __construct(){
        $this->modelService = new ModelService();
    }

    /**
     * @Action(method="POST")
     */
    public
    function addModel() {
        /** @var ModelRequest $modelRequest */
        $modelRequest = RestBodyReader::readRequestBody(ModelRequest::class);

        $createdModel = $this->modelRequest;

        echo JsonSerializer::getInstance()->serialize($createdModel, 'json');
    }

    /**
     * @Action(method="GET", path="/{id}")
     */
    public
    function getModel($id) {
        echo JsonSerializer::getInstance()->serialize($this->modelService->getModel($id), 'json');
    }

    /**
     * @Action(method="PUT", path="/{id}")
     */
    public
    function updateModel($id) {
        echo sprintf("Updated model with id: %s", $id);
    }

    /**
     * @Action(method="DELETE", path="/{id}")
     */
    public
    function deleteModel($id) {
        echo sprintf("Deleted model with id: %s", $id);
    }
}