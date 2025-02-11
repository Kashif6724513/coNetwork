<?php

namespace App\Repository\interfaces;

interface StudentRepositoryInterface
{
    public function all();

    public function store($request);

    public function update($request, $id);

    public function delete($id);

    public function find($id);
}
