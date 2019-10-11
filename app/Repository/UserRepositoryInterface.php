<?php


namespace App\Repository;


use http\Env\Request;

interface UserRepositoryInterface
{
 public function getAll();
 public function edit($id);
 public function update($id,$request);
 public function show($id);
 public function delete($id);

 public function store( $request);

 public function show_profile();
}
