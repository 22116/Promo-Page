<?php

namespace App\Http\Controllers;

use App\Models\University\Exceptions\UniversityException;
use App\Models\University\Mappers\LessonMapper;
use App\Models\University\Storages\LabStorage;
use App\Models\University\Storages\LessonStorage;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

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
		$lessonMapper = (new LessonMapper(new LessonStorage(), new LabStorage()));
		try {
			$lessonModel = $lessonMapper->getByIdentifier($lesson);
			$labModel = $lessonModel->getLab($number);
			$labModel->setBasePath($request->route()->getPrefix() . '/' . $lesson . '/' . $number, $currentSection);
		}
		catch (UniversityException $exception) {
			abort(404);
		}

		$this->args = $this->args->merge(['sections' => $labModel->getSections()]);
		$this->args->put('title', $labModel->getTitle());

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
