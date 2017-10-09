<?php

namespace App\Models\University\Lessons;

use App\Models\University\BaseLesson;

class PTLesson extends BaseLesson
{
	public function getTitle(): string
	{
		return 'Probability Theory';
	}
}