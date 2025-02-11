<?php

namespace App\Repository\interfaces;

interface StudentsRepositoryInterfaces
{
    public function all();

    public function create(); 

    public function store($request);

    public function find($id);

    public function update($request,$id);

    public function delete($id);
}
