<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Models\University\Lessons\PTLesson;


class University extends Controller
{
	private $args;

	public function __construct()
	{
		$this->middleware('university');

		$this->args = new Collection();
	}

	public function lab(Request $request, $lesson, $number, $currentSection = 'description')
	{
		$Lesson = new PTLesson();
		$Lesson->setUrlBasePath($request->route()->getPrefix() . '/' . $lesson . '/' . $number, $currentSection);
		foreach ($Lesson->getLabs() as $lab) {
			$this->args = $this->args->merge(['sections' => $lab->getSections()]);
			$this->args->put('title', $lab->getTitle());
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
