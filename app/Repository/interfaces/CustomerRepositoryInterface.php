<?php

namespace App\Repository\interfaces;

interface CustomerRepositoryInterface
{
    public function all();

   public function store($request);

    public function update($request, $id);

    public function delete($id);

    public function find($id);
}
