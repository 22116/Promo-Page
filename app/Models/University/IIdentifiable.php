<?php

namespace App\Models\University;

interface IIdentifiable
{
	public function setIdentifier(string $id) :void;
	public function getIdentifier() :string;
}