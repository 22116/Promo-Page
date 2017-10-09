<?php

namespace App\Models\University;

use Illuminate\Support\Collection;
use FilesystemIterator;
use ReflectionClass;
use Exception;

abstract class BaseLesson implements ILesson
{
	protected $labs;

	public function __construct()
	{
		$this->labs = new Collection();

		foreach (new FilesystemIterator(dirname((new ReflectionClass(static::class))->getFileName()) . '/Labs') as $file) {
			$lab = 'App\\Models\\University\\Lessons\\Labs\\' . substr($file->getFileName(), 0, strlen($file->getFileName()) - 4);
			$this->labs->push(new $lab());
		}
	}

	public function addLab(ILab $lab): void
	{
		$this->labs->push($lab);
	}

	public function getLab(int $id): ILab
	{
		if($this->labs->has($id)) {
			return $this->labs->get($id);
		}
		else {
			throw new Exception('Undefined lab ID.');
		}
	}

	public function getLabs(): Collection { return $this->labs; }

	public function setUrlBasePath(string $path, string $section) :void
	{
		foreach ($this->labs as $lab) {
			$lab->setBasePath($path, $section);
		}
	}
}