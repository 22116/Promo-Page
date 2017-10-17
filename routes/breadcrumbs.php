<?php

// Home
Breadcrumbs::register('home', function ($breadcrumbs) {
	$breadcrumbs->push('Home', route('home'));
});

// Home -> University
Breadcrumbs::register('university', function ($breadcrumbs) {
	$breadcrumbs->parent('home');
	$breadcrumbs->push('University', route('university'));
});

// Home -> University -> {lesson}
Breadcrumbs::register('lesson', function ($breadcrumbs, $params) {
	$breadcrumbs->parent('university');
	$breadcrumbs->push(ucfirst($params['lesson']), route('lesson', ['lesson' => $params['lesson']]));
});

// Home -> University -> {lesson} -> {lab}
Breadcrumbs::register('lab', function ($breadcrumbs, $params) {
	$breadcrumbs->parent('lesson', ['lesson' => $params['lesson']]);
	$breadcrumbs->push($params['number'], route('lab', ['lesson' => $params['lesson'], 'number' => $params['number']]));
});
