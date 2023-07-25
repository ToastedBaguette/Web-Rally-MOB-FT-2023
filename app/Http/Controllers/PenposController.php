<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Models\Map;
use App\Models\Result;
use App\Models\Group;
use Illuminate\Support\Facades\DB;

class PenposController extends Controller
{
    public function index(){
      $user = User::find(Auth::user()->id);
      $map = DB::table("maps")->select()->where("id", "=", $user->map_id)->first();
      $result = DB::table("results")->select()->where("post_id", "=", $user->id)->get();
      $done = array();
      foreach($result as $temp){
        array_push($done, $temp->group_id);
      }
      $groups = Group::all();
      $belumMain = array();

      foreach($groups as $temp){
        if(!in_array($temp->id, $done)){
          array_push($belumMain, $temp);
        }
      }
      return view("penpos", ["user"=>$user, "groups"=>$groups, "map"=>$map, "result"=>$result, "listGroup"=>$belumMain]);
    }

    public function submit(Request $request){
      $group_id = $request->get("team");
      $status = $request->get("status");
      $post_id = Auth::user()->id;

      $result = new Result();
      $result->group_id = $group_id;
      $result->result = $status;
      $result->post_id = $post_id;
      $result->save();

      return redirect()->route('penpos')->with("status", "Input data berhasil");
    }
}
