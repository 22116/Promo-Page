<?php

namespace App\Models\University\Storages;

use Illuminate\Support\Collection;

interface IStorage
{
	public function fetch() :Collection;
	public function fetchByParentId(string $id) :Collection;
}