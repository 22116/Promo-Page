<?php

namespace App\Models\University\Mappers;

use App\Models\University\Exceptions\UniversityException;
use App\Models\University\ILesson;
use App\Models\University\Storages\IStorage;
use Illuminate\Support\Collection;

class LessonMapper
{
	private $lessonStorage;
	private $labStorage;

	private $lessons;


	public function __construct(IStorage $lessonStorage, IStorage $labStorage)
	{
		$this->lessonStorage = $lessonStorage;
		$this->labStorage = $labStorage;

		$this->lessons = $this->lessonStorage->fetch();

		$this->initLessons();
	}

	private function initLessons() :void
	{
		foreach ($this->lessons as $lesson) {
			$labsData = $this->labStorage->fetchByParentId($lesson->getIdentifier());
			$labs = new Collection();
			$labsData->each(function ($lab) use (&$labs) {
				$labs[$lab->getIdentifier()] = $lab;
			});
			$lesson->setLabs($labs);
		}
	}

	public function getAll() :Collection
	{
		return $this->lessons;
	}

	public function getByIdentifier(string $id) :ILesson
	{
		if (!$this->lessons->contains(function ($lesson) use ($id) {
			return $lesson->getIdentifier() == $id;
		})) {
			throw new UniversityException('Undefined lesson identifier!');
		}

		return $this->lessons->filter(function ($lesson) use ($id) {
			return $lesson->getIdentifier() == $id;
		})->first();
	}
}