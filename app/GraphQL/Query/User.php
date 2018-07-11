<?php

namespace App\GraphQL\Query;

use App\Service\UserService;
use App\Util\CRUD\HandlesGraphQLQueryRequest;
use Exception;
use GraphQL\Type\Definition\ResolveInfo;


class User
{
    use HandlesGraphQLQueryRequest;


    public function __construct(UserService $CRUDService)
    {
        $this->CRUDService = $CRUDService;
        $this->modelType = "App\\Models\\User";
    }

    /**
     * @param $root
     * @param $args
     * @param $context
     * @param ResolveInfo $info
     * @return array
     * @throws Exception
     */
    public function getDailyActivity($root, $args, $context, ResolveInfo $info){
        $context->request->merge($args);

        if($this->CRUDService->getDailyActivity($context->request)){
            return $this->CRUDService->data;
        }else{
            throw new Exception(json_encode($this->CRUDService->errors));
        }
    }

    /**
     * @param $root
     * @param $args
     * @param $context
     * @param ResolveInfo $info
     * @return array
     * @throws Exception
     */
    public function getMonthlyActivity($root, $args, $context, ResolveInfo $info){
        $context->request->merge($args);

        if($this->CRUDService->getMonthlyActivity($context->request)){
            return $this->CRUDService->data;
        }else{
            throw new Exception(json_encode($this->CRUDService->errors));
        }
    }

}
