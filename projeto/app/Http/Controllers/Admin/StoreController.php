<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\models\Store;
use App\models\User;

class StoreController extends Controller
{
   public function index()
   {
        $stores = Store::paginate(10);
        return view('admin.index', compact('stores'));
   }

   public function create()
   {
      $users = User::all(['id', 'name']);
      return view('admin.create', compact('users'));
   }

   public function store(Request $request)
   {
      dd($request->all());
   }
}