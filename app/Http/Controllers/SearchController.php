<?php

namespace App\Http\Controllers;

class SearchController extends Controller {
	public function __invoke() {
		dd(request('q'));
	}
}