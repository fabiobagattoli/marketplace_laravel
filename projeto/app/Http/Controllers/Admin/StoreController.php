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
      $data = $request->all();

      $user = User::find($data['user']);
      $store = $user->store()->create($data);

      return $store;
   }

   public function edit($store)
   {
      $store = Store::find($store);
      return view('admin.edit', compact('store'));
   }

   public function update(Request $request, $store)
   {
      $data = $request->all();

      $store = Store::find($store);
      $store->update($data);

      return $store;
   }
}
