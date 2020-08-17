<?php
namespace App\Http\Controllers;

use App\User;
use Illuminate\Routing\Controller as BaseController;
use View;
use DB;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class Testcontroller extends BaseController
{

    public function index()
    {
        //var_dump("test");



        $data = array();
        $db_data = DB::table('test')->get()->toArray();
        $db_data=array_map(function($item){
          return (array) $item;
        },$db_data);

        $data["test"]= $db_data;
        $view = View::make('template')->nest('main', 'testview', $data);
        return $view;
    }
    public function bd_add(Request $request){

      $data=$request->input();

      unset($data["_token"]);

      DB::table('test')->insert($data);

      $db_data = DB::table('test')->get()->toArray();
      $db_data=array_map(function($item){
        return (array) $item;
      },$db_data);
      echo json_encode($db_data);
    }
    public function delete(Request $request){
      $data=$request;

      unset($data["_token"]);

      DB::table('test')->delete($data);



      $db_data = DB::table('test')->get();

      echo json_encode($db_data);

    }
}
