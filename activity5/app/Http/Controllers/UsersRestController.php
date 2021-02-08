<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Business\SecurityService;
use App\Models\DTO;

class UsersRestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $service = new SecurityService();
        $dto = new DTO();
        $dto->data = $service->getAllUsers();
        return $dto;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $service = new SecurityService();
        $dto = new DTO();
        $dto->data = $service->getUser($id);
        return $dto;
    }
}
