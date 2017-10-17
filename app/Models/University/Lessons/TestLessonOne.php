<?php

namespace App\Models\University\Lessons;

use App\Models\University\BaseLesson;


class TestLessonOne extends BaseLesson
{
	public function getIdentifier(): string { return 'test'; }
	public function getTitle(): string
	{
		return 'Test';
	}
}