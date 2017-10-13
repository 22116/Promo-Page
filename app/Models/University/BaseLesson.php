<?php

namespace App\Models\University;

use Illuminate\Support\Collection;
use Exception;

abstract class BaseLesson implements ILesson
{
	protected $labs;

	public function __construct()
	{
		$this->labs = new Collection();
	}

	public function setLabs(Collection $labs)
	{
		$this->labs = $labs;
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

		throw new Exception('Undefined lab ID.');
	}

	public function getLabs(): Collection { return $this->labs; }

	public function setUrlBasePath(string $path, string $section) :void
	{
		foreach ($this->labs as $lab) {
			$lab->setBasePath($path, $section);
		}
	}
}