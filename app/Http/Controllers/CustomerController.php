<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerRequest;
use App\Http\Resources\CustomerResource;
use App\Repository\interfaces\CustomerRepositoryInterface;

class CustomerController extends Controller
{
    protected $customerRepository;
    
    public function __construct(CustomerRepositoryInterface $customerRepository)
    {
        $this->customerRepository = $customerRepository;
    }

    public function index()
    {
        $customers = $this->customerRepository->all();

        return response()->json([
            'message' => 'All Customers ',
            'customers' => CustomerResource::collection($customers)
        ], 200);
    }

    public function store(CustomerRequest $request)
    {
        $customer = $this->customerRepository->store($request);
        return response()->json([
            'message' => 'Customer added successfully'
        ], 200);
    }

    public function show($id)
    {
        $customer = $this->customerRepository->find($id);

        return response()->json([
            'message' => 'List of single Customer',
            'customers' => CustomerResource::collection($customer)
        ], 200);
    }

    public function update(CustomerRequest $request, $id)
    {
        $customer = $this->customerRepository->update($request, $id);

        return response()->json([
            'message' => 'Customer updated successfully'
        ], 200);
    }

    public function delete($id)
    {
        $customer = $this->customerRepository->delete($id);

        return response()->json([
            'message' => 'Customer deleted successfully'
        ], 200);
    }
}
