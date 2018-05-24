<?php
namespace App\Http\GraphQL\Mutations;

use App\Service\UserService;
use App\Util\CRUD\HandlesGraphQLCRUDRequest;
use GraphQL;
use GraphQL\Type\Definition\ObjectType;
use Illuminate\Http\Request;
use \Folklore\GraphQL\Support\Mutation as GraphQLMutation;

/**
 * Created by PhpStorm.
 * User: erick
 * Date: 5/24/18
 * Time: 2:11 PM
 */

class User extends GraphQLMutation
{
    use HandlesGraphQLCRUDRequest;

    protected $request;

    public function __construct($attributes = [],Request $request,UserService $CRUDService)
    {
        parent::__construct($attributes);
        $this->request = $request;
        $this->CRUDService = $CRUDService;
    }

    /**
     * Attributes of mutation.
     *
     * @var array
     */
    protected $attributes = [
        'name' => 'user'
    ];

    /**
     * Type that mutation returns.
     *
     * @return ObjectType
     */
    public function type()
    {
        return GraphQL::type('user');
    }
}