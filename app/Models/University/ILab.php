<?php

namespace App\Models\University;

use Illuminate\Support\Collection;

interface ILab
{
	public function getSections() :Collection;
	public function getTitle() :string;
	public function getIdentifier() :string;
	public function getLessonIdentifier() :string;
	public function setBasePath(string $path, string $section) :void;
}