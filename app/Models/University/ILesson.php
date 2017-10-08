<?php

namespace University;

use Illuminate\Support\Collection;

interface ILesson
{
	public function getLabs() :Collection;
	public function getLab(int $id) :ILab;
	public function getTitle() :string;
	public function addLab() :void;
}