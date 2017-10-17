<?php

namespace App\Models\University\Storages;

use Illuminate\Support\Collection;
use FilesystemIterator;

class LabStorage implements IStorage
{
	private $labs;

	public function __construct()
	{
		$this->labs = new Collection();

		foreach (new FilesystemIterator(__DIR__ . '/../Labs') as $file) {
			$lab = 'App\\Models\\University\\Lessons\\Labs\\' . substr($file->getFileName(), 0, strlen($file->getFileName()) - 4);
			$lab = new $lab();
			$this->labs->push($lab);
		}
	}

	public function fetch() :Collection
	{
		return $this->labs;
	}

	public function fetchByParentId(string $id): Collection
	{
		return $this->labs->filter(function ($lab) use ($id) {
			return $lab->getParentIdentifier() == $id;
		});
	}
}