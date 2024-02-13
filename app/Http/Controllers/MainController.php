<?php

namespace App\Http\Controllers;
use App\Models\Train;
use Illuminate\Http\Request;

class MainController extends Controller
{
   public function index(){

        $trains = Train::whereDate('department_time', '=', '2024-02-13')->get();;

        return view('pages.index', compact('trains'));
   }
}
