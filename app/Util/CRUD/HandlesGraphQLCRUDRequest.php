<?php

namespace App\Util\CRUD;

use Exception;
use GraphQL\Type\Definition\Type;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

trait HandlesGraphQLCRUDRequest
{
    protected $CRUDService;

    /**
     * Store a newly created resource in storage.
     * @return Model
     * @throws Exception
     */
    public function Add(){
        if($this->CRUDService->add($this->request)){
            return $this->CRUDService->info['added'];
        }else{
            throw new Exception(json_encode($this->CRUDService->errors));
        }
    }

    /**
     * Update the specified resource in storage.
     * @return Exception|Model
     * @throws Exception
     */
    public function Update(){
        if($this->CRUDService->update($this->request,$this->request->id)){
            return $this->CRUDService->info['updated'];
        }else{
            throw new Exception(json_encode($this->CRUDService->errors));
        }
    }

    /**
     * Remove the specified resource from storage.
     * @return Exception|Model
     * @throws Exception
     */
    public function Delete(){
        if($this->CRUDService->delete($this->request,$this->request->id)){
            return $this->CRUDService->info['deleted'];
        }else{
            throw new Exception(json_encode($this->CRUDService->errors));
        }
    }

    /**
     * Available arguments on mutation.
     *
     * @return array
     */
    public function args()
    {
        return [
            'type' => [
                'type' => Type::nonNull(Type::string())
            ],
            'raw' => [
                'type' => Type::nonNull(Type::string())
            ]
        ];
    }

    /**
     * Resolve the mutation.
     *
     * @param  mixed $root
     * @param  array  $args
     * @return mixed
     */
    public function resolve($root, array $args)
    {
        $raw = json_decode($args['raw'],true);

        $this->request->merge($raw);

        $fn = $args['type'];

        try{
            return $this->$fn();
        }catch (Exception $e){
            return $e;
        }

    }

}