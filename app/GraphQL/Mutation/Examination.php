<?php

namespace App\GraphQL\Mutation;



use App\Service\ExaminationService;
use App\Util\CRUD\HandlesGraphQLMutationRequest;
use GraphQL\Type\Definition\ResolveInfo;

class Examination
{
    use HandlesGraphQLMutationRequest;

    public function __construct(ExaminationService $CRUDService)
    {
        $this->CRUDService = $CRUDService;
    }


    /**
     * Resolve the mutation.
     *
     * @param  mixed $root
     * @param  array $args
     * @return mixed
     * @throws \Exception
     */
    public function resolve($root, $args, $context, ResolveInfo $info)
    {

        $context->request->merge(array_merge($args['examination'],$args));

        if(isset($args['time'])){
            $context->request->request->add(['with_time' => true]);
            $context->request->merge(array_merge($args['time'],$args));
        }

        if(isset($args['location'])){
            $context->request->request->add(['with_location' => true]);
            $context->request->merge(array_merge($args['location'],$args));
        }

        if(isset($args['taggeds'])){
            $context->request->request->add(['with_tagged' => true]);
            $context->request->merge(array_merge($args['taggeds'],$args));
        }

        $fn = $args['method'];
        return $this->$fn($context->request,$context->request->id ?? $context->request->id);
    }
}
