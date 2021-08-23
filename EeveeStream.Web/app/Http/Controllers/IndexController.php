<?php

namespace App\Http\Controllers;

use App\Models\Session;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function Show(Request $request) : mixed
	{
		$return_view = view("index");
		//see if user_session key exists
		if($request->session()->get('user_session') !== null) {
			try {
				//query for session and user
				$session = Session::query()->where("id", $request->session()->get('user_session'))->first();
				$user = User::query()->where("id", $session->user_id)->first();
				//append variable username to view
				$return_view = $return_view->with("username", $user->username);

			}catch (\Exception $e){

			}
		}

		return $return_view;
	}
}
