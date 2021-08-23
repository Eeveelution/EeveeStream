<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChangelogController extends Controller
{
    public function Show(Request $request, string $branch, string $version = null): mixed {
    	return view("changelog")
			->with("branch", $branch)
			->with("version", $version);
	}
}
