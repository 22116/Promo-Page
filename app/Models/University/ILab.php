<?php

namespace App\Models\University;

use Illuminate\Support\Collection;

interface ILab extends IIdentifiable
{
	public function getSections() :Collection;
	public function getTitle() :string;
	public function getParentIdentifier() :string;
	public function setBasePath(string $path, string $section) :void;
}