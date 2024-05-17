<?php

namespace App\Http\Controllers;

use App\Models\Tag;

class TagController {
	public function __invoke(Tag $tag) {
		return view('results', ['jobs' => $tag->jobs]);
	}
}