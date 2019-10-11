<?php


namespace App\Service;


interface UserServiceInterface
{
    public function getAll();
    public function edit($id);
    public function update($id,$request);
    public function show($id);
    public function delete($id);

    public function store($request);
    public function show_profile();
}
