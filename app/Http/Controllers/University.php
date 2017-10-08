<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use University\LessonFactory;

class University extends Controller
{
	private $args = [
		'sections' => [
			['name' => 'description', 'href' => '#', 'text' => 'Description', 'active' => false],
			['name' => 'data',        'href' => '#', 'text' => 'Data',        'active' => false],
			['name' => 'result',      'href' => '#', 'text' => 'Result',      'active' => false]
		],
		'title' => 'Lab'
	];

	public function __construct()
	{
		$this->middleware('university');
	}

	public function lab(Request $request, $lesson, $number, $currentSection = 'description')
	{
		foreach ($this->args['sections'] as &$section) {
			$section['active'] = $section['name'] == $currentSection;
			$section['href'] = $request->route()->getPrefix() . '/' . $lesson . '/' . $number . '/' . $section['name'];
		}

		return view('university.lab', $this->args);
	}

	public function lesson()
	{
		return view('university.lesson');
	}

	public function index()
	{
		return view('layouts.clear');
	}
}
