<?php

namespace University;

use Illuminate\Support\Collection;

interface ILab
{
	public function getSections() :Collection;
	public function getTitle() :string;
	public function getId() :int;
}