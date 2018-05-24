<?php
/**
 * Created by PhpStorm.
 * User: erick
 * Date: 5/24/18
 * Time: 2:00 PM
 */

namespace App\Http\GraphQL\Queries;

use GraphQL;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Query as GraphQLQuery;

class User extends GraphQLQuery
{
    protected $attributes = [
        'name' => 'user'
    ];

    public function type()
    {
        return GraphQL::type('user');
    }

    public function args()
    {
        return [
            'id' => [
                'name' => 'id',
                'type' => Type::int()
            ],
        ];
    }

    public function resolve($root, $args)
    {
        if (isset($args['id'])) {

            return \App\Models\User::find($args['id']);

        } else {

            return null;
        }
    }
}