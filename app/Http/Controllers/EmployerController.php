<?php

namespace App\Http\Controllers;

use App\Services\EmployerService;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;

class EmployerController extends Controller
{
        public function index()
        {
            $employers = (new EmployerService())->all();
            return view('employers.index',compact('employers'));
        }
}
