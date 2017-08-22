<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\payments;

use Illuminate\Support\Facades\Input;

class client extends Controller {


    public function index() {
    return view("clients");
    }

    public function create() {

    }

    public function store(Request $request) {

        $user = new client;
        $user->clientname = Input::post("clientname");
        $user->email = Input::post("email");
        $user->name = Input::post("phone");
        $user->name = Input::post("balance");
        $user->name = Input::post("active");
        $user->name = Input::post("options");
        $user->save();
}

public function show($id) {

}
}