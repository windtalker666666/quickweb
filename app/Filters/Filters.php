<?php

namespace App\Filters;

use App\User;
use Illuminate\Http\Request;


abstract class Filters
{

    protected $request, $builder;
     
    protected $filters = [];

    public function __construct(Request $request)
     {
         $this->request = $request;
     }


    public function apply($builder)
    {
        //we apply our filter to the builders

        $this->builder = $builder;

        $this->getFilters()
            ->filter(function($filter){
                return method_exists($this,$filter);
            })
            ->each(function($filter,$value){
                $this->$filter($value);
            });


        return $this->builder;         
    }

    public function getFilters()
    {
        return collect($this->request->only($this->filters))->flip();
       // return method_exists($this,$filter) && $this->request->has($filter);
    }
}