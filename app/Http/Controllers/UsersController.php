<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Datatables;
use DB;
use Hash;

use App\Models\Users;

class UsersController extends Controller
{

    public function get($id) {
      $users = Users::find($id);
      return response()->json( ['success' => true, 'users' => $users] );
    }

    public function insert(Request $request){

      	$users = new Users;
      	$users->name = $request->name;
      	$users->password = Hash::make($request->password);
        $users->email = $request->email;
        $users->phonenumber = $requests->phonenumber;

      	if($users->save()){
          return response()->json( ['success' => true] );
        } else {
          return response()->json( ['success' => false] );
        }

    }

    public function update(Request $request, $id) {

        $users = Users::find($id);
        $users->name = $request->name;
        $users->email = $request->email;
        $users->phonenumber = $requests->phonenumber;

        if($users->save()){
          return response()->json( ['success' => true] );
        } else {
          return response()->json( ['success' => false] );
        }
    }

    public function delete(Request $request, $id) {
        $users = Users::find($id);
        $users->delete();

        return response()->json( ['success' => true] );
    }

}
