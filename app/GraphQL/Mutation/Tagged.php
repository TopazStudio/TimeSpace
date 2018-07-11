<?php
/**
 * Created by PhpStorm.
 * User: erick
 * Date: 9/07/18
 * Time: 3:50 PM
 */

namespace App\GraphQL\Mutation;


use App\Service\TaggedService;
use App\Util\CRUD\HandlesGraphQLMutationRequest;
use GraphQL\Type\Definition\ResolveInfo;

class Tagged
{
    use HandlesGraphQLMutationRequest;

    public function __construct(TaggedService $CRUDService)
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

        $context->request->merge(array_merge($args['tagged'],$args));

        $fn = $args['method'];
        return $this->$fn($context->request,$context->request->id ?? $context->request->id);
    }
}