<?php

namespace App\Http\Controllers;

use App\Models\University\Mappers\LessonMapper;
use App\Models\University\Storages\LabStorage;
use App\Models\University\Storages\LessonStorage;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class University extends Controller
{
	private $args;
	private $lessonMapper;

	public function __construct()
	{
		$this->lessonMapper = new LessonMapper(new LessonStorage(), new LabStorage());
		$this->args = new Collection();
	}

	public function lab(Request $request, $lesson, $number, $currentSection = 'description')
	{
		$lessonModel = $this->lessonMapper->getByIdentifier($lesson);
		$labModel = $lessonModel->getLab($number);

		$labModel->setBasePath($request->route()->getPrefix() . '/' . $lesson . '/' . $number, $currentSection);
		$this->args = $this->args->merge(['sections' => $labModel->getSections()]);
		$this->args->put('title', $labModel->getTitle());

		return view('university.lab', $this->args);
	}

	public function lesson(Request $request, $lesson = null)
	{
		$lessons = is_null($lesson) ? $this->lessonMapper->getAll() : new Collection([$this->lessonMapper->getByIdentifier($lesson)]);
		$this->args->put('title', is_null($lesson) ? 'Lessons' : $lessons->first()->getTitle());

		$this->args['lessons'] = new Collection();
		foreach ($lessons as $lesson) {
			$labs = $lesson->getLabs();
			$labsCollection = new Collection();
			foreach ($labs as $lab) {
				$labsCollection->push([
					'number' => $lab->getIdentifier(),
					'href' => $request->route()->getPrefix() . '/' . $lesson->getIdentifier() . '/' . $lab->getIdentifier()
				]);
			}
			$this->args['lessons']->push([
				'title' => $lesson->getTitle(),
				'labs' => $labsCollection
			]);
		}

		return view('university.lesson', $this->args);
	}
}
