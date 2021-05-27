<?php
namespace App\Controllers;

use Core\App;
class UserController{
    public function index(){
        $users = App::get('database')->all('users');
        return view('user', compact('users'));
    }

    public function store(){        
        App::get('database')->insert('users', [
            'name' => $_POST['name'],
        ]);

        return redirect('user');

    }
}
