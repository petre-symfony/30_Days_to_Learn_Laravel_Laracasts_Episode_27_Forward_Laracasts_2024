<?php

it('belongs to an employer', function () {
	//Arange
	$employer = \App\Models\Employer::factory()->create();
	$job = \App\Models\Job::factory()->create(['employer_id' => $employer->id]);
	//Act and Assert
	expect($job->employer()->is($employer))->toBeTrue();
});
