<?php

namespace App\GraphQL\Query;

use App\Service\GroupService;
use App\Util\CRUD\HandlesGraphQLQueryRequest;

class Group
{
    use HandlesGraphQLQueryRequest;

    public function __construct(GroupService $CRUDService)
    {
        $this->CRUDService = $CRUDService;
        $this->modelType = "App\\Models\\Group";
    }
}
