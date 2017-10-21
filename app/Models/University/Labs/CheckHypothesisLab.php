<?php

namespace App\Models\University\Lessons\Labs;

use App\Models\Database\HlPation;
use Illuminate\Support\Collection;
use App\Models\University\BaseLab;
use App\Models\University\Section;
use MathPHP\Probability\Distribution\Discrete;
use MathPHP\Probability\Distribution\Continuous;
use MathPHP\Statistics\RandomVariable;

class CheckHypothesisLab extends BaseLab
{
	private $alpha = 0.1;

	public function getTitle() :string       { return 'Check hypothesis for descrete parameters'; }
	public function getParentIdentifier() :string { return 'probabilitytheory'; }
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
		return '<p><b>Перевірка гіпотез про ймовірність для дискретних параметрів (1 варіант)</b></p>
				<p>Однією із задач первинного аналізу даних є задача отримання статистичних висновків про параметри розподілу. 
				При цьому аналіз параметрів розподілу дискретних змінних (параметрів) за допомогою таблиць частот є окремим напрямом дослідження. 
				Якщо неперервні змінні завжди є кількісними і вимірюються в інтервальній шкалі або в шкалі відносин, маючи деяку одиницю виміру, 
				то дискретні змінні одиниці виміру не мають. Для вимірювання таких змінних використовують одну з двох шкал – шкалу найменувань або порядкову шкалу. 
				Метою даної лабораторної роботи є освоєння методів отримання висновків стосовно гіпотез про ймовірність при аналізі випадкових величин, які вимірюються в шкалі найменувань.</p>
				<p>Перевірити гіпотезу про те, що кількість чоловіків і жінок у досліджуваній сукупності, наведеній в табл. A.1, A.2, однакова. Побудувати 95 % й довірчий інтервал. 
				Використати біноміальний закон розподілу, z-критерій і критерій χ2.</p>';
	}

	private function constructData() :string
	{
		$string =  '<table class="table table-responsive table-striped" style="max-width: 100%; font-size: 6pt">';
		$string .= '<thead><tr>
							<th class="col-xl-1">Id</th>
							<th class="col-xl-1">Age</th>
							<th class="col-xl-1">Height</th>
							<th class="col-xl-1">Sex</th>
							<th class="col-xl-1">Survival</th>
							<th class="col-xl-1">Shock Type</th>
							<th class="col-xl-1">SP</th>
							<th class="col-xl-1">MAP</th>
							<th class="col-xl-1">HR</th>
							<th class="col-xl-1">DP</th>
							<th class="col-xl-1">MVP</th>
							<th class="col-xl-1">BSA</th>
							<th class="col-xl-1">CI</th>
							<th class="col-xl-1">AT</th>
							<th class="col-xl-1">MCT</th>
							<th class="col-xl-1">UO</th>
							<th class="col-xl-1">PVI</th>
							<th class="col-xl-1">RCI</th>
							<th class="col-xl-1">HGB</th>
							<th class="col-xl-1">HCT</th>
							<th class="col-xl-1">Init final</th>
					</tr></thead>';
		foreach (HlPation::all() as $pation) {
			$string .= '<tr>
							<td class="col-xl-1">'.$pation->id.'</td>
							<td class="col-xl-1">'.$pation->age.'</td>
							<td class="col-xl-1">'.$pation->height.'</td>
							<td class="col-xl-1">'.$pation->sex->name.'</td>
							<td class="col-xl-1">'.$pation->survival->name.'</td>
							<td class="col-xl-1">'.$pation->shock_type->name.'</td>
							<td class="col-xl-1">'.$pation->sp.'</td>
							<td class="col-xl-1">'.$pation->map.'</td>
							<td class="col-xl-1">'.$pation->hr.'</td>
							<td class="col-xl-1">'.$pation->dp.'</td>
							<td class="col-xl-1">'.$pation->mvp.'</td>
							<td class="col-xl-1">'.$pation->bsa.'</td>
							<td class="col-xl-1">'.$pation->ci.'</td>
							<td class="col-xl-1">'.$pation->at.'</td>
							<td class="col-xl-1">'.$pation->mct.'</td>
							<td class="col-xl-1">'.$pation->uo.'</td>
							<td class="col-xl-1">'.$pation->pvi.'</td>
							<td class="col-xl-1">'.$pation->rci.'</td>
							<td class="col-xl-1">'.$pation->hgb.'</td>
							<td class="col-xl-1">'.$pation->hct.'</td>
							<td class="col-xl-1">'.$pation->init_final->name.'</td>
						</tr>';
		}
		$string .= '</table>';

		return $string;
	}

	private function constructResult() :string
	{
		$string = '';
		$peoples = [
			'mans' => HlPation::all()->filter(function (HlPation $pation) {
				return $pation->sex->name == 'Man';
			})->count(),
			'womans' => HlPation::all()->filter(function (HlPation $pation) {
				return $pation->sex->name == 'Woman';
			})->count()
		];
		$string .= '<table class="table table-responsive table-striped" style="width: auto; width: 100%">
					<thead><tr>
						<th></th>
						<th class="col-xl-1">Mans</th>
						<th class="col-xl-1">Womans</th>
					</tr></thead>
					<tr>
						<th>Count</th>
						<td>'.$peoples['mans'].'</td>
						<td>'.$peoples['womans'].'</td>
					</table>';
		$string .= '<p><b>H<sub>0</sub></b> = 1/2</p>';
		$string .= '<p class="h4">Binomial</p>';
		$string .= '<p>'.Discrete\Binomial::cdf(HlPation::all()->count()/100, min($peoples['womans'], $peoples['mans'])/100, 1/2).'</p>';
		$string .= '<p class="h4">ChiSquared</p>';
		$string .= '<p>'.Continuous\ChiSquared::pdf(HlPation::all()->count(), $peoples['womans']).'</p>';
		$string .= '<p class="h4">Confidence interval</p>';
		$string .= '<p>'.var_export(RandomVariable::confidenceInterval(1,2,3,99), true).'</p>';
		return $string;
	}
}