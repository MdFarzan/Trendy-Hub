<?php 

namespace App\Controllers\Admin;


use App\Controllers\BaseController;

class AdminAuth extends BaseController{

    // route for admin authentication
    public function index(){


        return view('Master Layouts/AdminLTE/starter.php');
    }
    



    // end of class
}