<?php

namespace App\Models\University\Lessons\Labs;

use Illuminate\Support\Collection;
use App\Models\University\BaseLab;
use App\Models\University\Section;

class CheckHypothesisLab extends BaseLab
{
	public function getTitle() :string       { return 'Check hypothesis for descrete parameters'; }
	public function getIdentifier() :string  { return 1; }
	public function getSections():Collection { return $this->buildSections(); }

	private function buildSections() :Collection
	{
		return new Collection([
			new Section($this->constructUri('description'), 'Description', $this->constructContent()->get('description'), $this->baseSection == 'description'),
			new Section($this->constructUri('data'),        'Data',        $this->constructContent()->get('data'),        $this->baseSection == 'data'),
			new Section($this->constructUri('result'),      'Result',      $this->constructContent()->get('result'),      $this->baseSection == 'result'),
		]);
	}

	private function constructContent() :Collection
	{
		return new Collection([
			'description' => $this->constructDescription(),
			'data' => $this->constructData(),
			'result' => $this->constructResult()
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