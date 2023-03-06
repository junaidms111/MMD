<?php

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class EmployerService
{

    public function makeHttpRequest($url){
        $request = Http::withHeaders($this->getHeaders())->get($url);
        return optional(json_decode($request->getBody()->getContents()))->results;
    }


    public function getHeaders(){
        return ['Authorization' => 'Token '.env('API_AUTH_TOKEN'), 'Content-Type' => 'application/json'];
    }

    public function all(){
        return $this->makeHttpRequest(env('BASE_URL').'/mmd/employees/');
    }

    public function store(Request $request)
    {

    }

    public function update(Request $request,$id)
    {

    }

    public function delete($id)
    {

    }


}
