<?php

namespace App\Models\University;

use Illuminate\Support\Collection;

interface ILesson extends IIdentifiable
{
	public function getLabs() :Collection;
	public function setLabs(Collection $labs);
	public function getLab(int $id) :ILab;
	public function getTitle() :string;
	public function addLab(ILab $lab) :void;
}