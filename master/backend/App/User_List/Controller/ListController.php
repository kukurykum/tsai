<?php


namespace App\User_List\Controller;

use App\Router\RestBodyReader;
use App\Serializer\JsonSerializer;
use App\User_List\Model\ListRequest;
use App\User_List\Service\ListService;

/**
 * @Controller(path="/list")
 */
class ListController {
    private $listService;

    /**
     * ListController constructor.
     */
    public function __construct(){
        $this->listService = new listService();
    }

    /**
     * @Action(method="POST")
     */
    public
    function addUser() {
        /** @var ListRequest $listRequest */
        $listRequest = RestBodyReader::readRequestBody(ListRequest::class);

        $createdList = $this->listService->addList($listRequest->getName(), $listRequest->getUserId());

        echo JsonSerializer::getInstance()->serialize($createdList, 'json');
    }

    /**
     * @Action(method="GET", path="/{id}")
     */
    public
    function getList($id) {
        echo JsonSerializer::getInstance()->serialize($this->listService->getList($id), 'json');
    }

    /**
     * @Action(method="PUT", path="/{id}")
     */
    public
    function updateList($id) {
        echo sprintf("Updated list with id: %s", $id);
    }

    /**
     * @Action(method="DELETE", path="/{id}")
     */
    public
    function deleteList($id) {
        echo sprintf("Deleted list with id: %s", $id);
    }
}