<?php

it('belongs to an employer', function () {
	//Arange
	$employer = \App\Models\Employer::factory()->create();
	$job = \App\Models\Job::factory()->create(['employer_id' => $employer->id]);
	//Act and Assert
	expect($job->employer()->is($employer))->toBeTrue();
});

it('can have tags', function (){
	//AAA
	$job = \App\Models\Job::factory()->create();

	$job->tag('frontend');

	expect($job->tags)->toHaveCount(1);
});