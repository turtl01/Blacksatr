<?php
namespace App\Http\Controllers;

use App\User;
use Illuminate\Routing\Controller as BaseController;
use View;
use DB;

class Main extends BaseController
{
  public $dataVariable = "some data";

  public function __construct() {

  }

    public function index()
    {

        $data=array();

        $view = View::make('template', $data)->nest('main', 'main_page',  $data);
        return $view;
    }

}
