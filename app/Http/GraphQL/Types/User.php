<?php

namespace App\Http\GraphQL\Types;

use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as GraphQLType;

class User extends GraphQLType
{
    /**
     * Attributes of type.
     *
     * @var array
     */
    protected $attributes = [
        'name' => 'user',
        'description' => 'TimeSpace Application User'
    ];

    /**
     * Type fields.
     *
     * @return array
     */
    public function fields()
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'Id of the user.',
            ],
            'full_name' => [
                'type' => Type::string(),
                'description' => 'Name of the user.',
            ],
            'email' => [
                'type' => Type::string(),
                'description' => 'Email of the user.',
            ],
            'role' => [
                'type' => Type::string(),
                'description' => 'Role of the user.',
            ],
            'status' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'Availability of the user.',
            ],
            'tel' => [
                'type' => Type::string(),
                'description' => 'Id of the user.',
            ],
        ];
    }

    protected function resolveEmailField($root, $args)
    {
        return strtolower($root->email);
    }
}
