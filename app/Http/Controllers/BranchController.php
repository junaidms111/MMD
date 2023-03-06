<?php

namespace App\Http\Controllers;
use App\Services\BranchService;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    public function index() {
        $branches = (new BranchService())->all();
            return view('branches.index',compact('branches'));
    }
}
