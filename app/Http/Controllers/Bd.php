<?php
namespace App\Http\Controllers;

use App\User;
use Illuminate\Routing\Controller as BaseController;
use View;
use DB;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class Bd extends BaseController
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
        $view = View::make('template')->nest('main', 'all', $data);
        return $view;
    }
    public function create(){
      $data=array();

      $view = View::make('template')->nest('main', 'create', $data);

      return $view;

    }

    public function add(Request $request){

      $data=$request->input();

      unset($data["_token"]);
      DB::table('test')->insert($data);

      return redirect()->action('Bd@index');
    }

    public function del(Request $request, $id){
      $data['id']=$id;

      DB::table('test')->delete($data);

      return redirect()->action('Bd@index');
    }
    public function edit(Request $request, $id){
      $data = array();
      $db_data = DB::table('test')->select("*")->where("id", $id)->get()->toArray();
      $db_data=array_map(function($item){
        return (array) $item;
      },$db_data);

      $data["item"]= $db_data[0];
      $data["id"]=$id;

      $view = View::make('template')->nest('main', 'edit', $data);
      return $view;
    }
    public function update(Request $request){
      $data=$request->input();

      unset($data["_token"]);
      DB::table('test')->where('id', $data["id"])->update($data);

      return redirect()->action('Bd@index');
    }
}
