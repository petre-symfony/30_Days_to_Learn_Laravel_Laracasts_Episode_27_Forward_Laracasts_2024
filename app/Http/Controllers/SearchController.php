<?php

namespace App\Http\Controllers;

use App\Models\Job;

class SearchController extends Controller {
	public function __invoke() {
		$json = Job::where('title', 'like', '%'.request('q').'%')->get();

		return $json;
	}
}