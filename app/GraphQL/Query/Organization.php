<?php

namespace App\GraphQL\Query;



use App\Service\OrganizationService;
use App\Util\CRUD\HandlesGraphQLQueryRequest;

class Organization
{
    use HandlesGraphQLQueryRequest;


    public function __construct(OrganizationService $CRUDService)
    {
        $this->CRUDService = $CRUDService;
        $this->modelType = "App\\Models\\Organization";
    }
}
