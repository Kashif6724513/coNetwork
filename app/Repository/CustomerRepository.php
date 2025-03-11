<?php

namespace App\Repository;

use App\Models\Customer;
use App\Repository\interfaces\CustomerRepositoryInterface;

class CustomerRepository implements CustomerRepositoryInterface
{
    protected $model;
    public function __construct () {
		$this->model = new Customer();
	}
    public function all()
    {
       return $this->model::orderBy('id','DESC')->get();
    }

    public function store($request)
    {
        $customer = new $this->model();
        $customer->name = $request->name;
        $customer->phone = $request->phone;
        $customer->product_name = $request->product_name;
        $customer->price = $request->price;
        $customer->description = $request->description;
        $customer->save();
        
    }

    public function find($id)
    {
      return  $customer = $this->model::find($id);
    }

    public function update($request,$id)
    {
        $customer = $this->model::find($id);
        $customer->name = $request->name;
        $customer->phone = $request->phone;
        $customer->product_name = $request->product_name;
        $customer->price = $request->price;
        $customer->description = $request->description;
        $customer->save();
    }

    public function delete($id)
    {
        $customer = $this->model::find($id);
        return $customer->delete();
    }
}
