<?php

namespace App\Models\University\Storages;

use Illuminate\Support\Collection;
use FilesystemIterator;

class LessonStorage implements IStorage
{
	private $lessons;

	public function __construct()
	{
		$this->lessons = new Collection();

		foreach (new FilesystemIterator(__DIR__ . '/../Lessons') as $file) {
			$lesson = 'App\\Models\\University\\Lessons\\' . substr($file->getFileName(), 0, strlen($file->getFileName()) - 4);
			$lesson = new $lesson();
			$this->lessons->push($lesson);
		}
	}

	public function fetch() :Collection
	{
		return $this->lessons;
	}

	public function fetchByParentId(string $id): Collection
	{
		return $this->lessons;
	}
}