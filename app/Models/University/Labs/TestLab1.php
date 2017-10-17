<?php

namespace App\Models\University\Lessons\Labs;

use Illuminate\Support\Collection;
use App\Models\University\BaseLab;
use App\Models\University\Section;

class TestLab1 extends BaseLab
{
	public function getTitle() :string       { return 'Check hypothesis for descrete parameters'; }
	public function getParentIdentifier() :string { return 'test'; }
	public function getIdentifier() :string  { return 1; }
	public function getSections():Collection
	{
		return new Collection([
			new Section($this->constructUri('description'), 'Description', $this->constructDescription(), $this->baseSection == 'description'),
			new Section($this->constructUri('data'),        'Data',        $this->constructData(),        $this->baseSection == 'data'),
			new Section($this->constructUri('result'),      'Result',      $this->constructResult(),      $this->baseSection == 'result'),
		]);
	}

	private function constructDescription() :string
	{
		return 'description';
	}

	private function constructData() :string
	{
		return 'data';
	}

	private function constructResult() :string
	{
		return 'result';
	}
}