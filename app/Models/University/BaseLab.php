<?php

namespace App\Models\University;

abstract class BaseLab implements ILab
{
	protected $basePath = '';
	protected $baseSection = 'description';

	protected function constructUri(string $module) :string
	{
		return $this->basePath . '/' . $module;
	}

	public function setBasePath(string $path, string $section) :void
	{
		$this->basePath = $path;
		$this->baseSection = $section;
	}
}