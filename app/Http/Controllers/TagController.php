<?php

namespace App\Http\Controllers;

class TagController {
	public function __invoke() {
		//jobs for this tag;

		return view('results', ['jobs' => $jobs]);
	}
}