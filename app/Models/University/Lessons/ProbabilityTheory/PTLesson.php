<?php

namespace App\Models\University\Lessons;

use App\Models\University\BaseLesson;

class PTLesson extends BaseLesson
{
	public function getIdentifier(): string { return 'probabilitytheory'; }
	public function getTitle(): string
	{
		return 'Probability Theory';
	}
}