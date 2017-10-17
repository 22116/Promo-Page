<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class checkHypothesisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hl_sex')->insert([
        	'id' => 1,
	        'name' => 'Man'
        ]);
	    DB::table('hl_sex')->insert([
		    'id' => 2,
		    'name' => 'Woman'
	    ]);
	    DB::table('hl_survival')->insert([
		    'id' => 1,
		    'name' => 'Alive'
	    ]);
	    DB::table('hl_survival')->insert([
		    'id' => 3,
		    'name' => 'Dead'
	    ]);
	    DB::table('hl_shock_type')->insert([
		    'id' => 1,
		    'name' => 'without'
	    ]);
	    DB::table('hl_shock_type')->insert([
		    'id' => 2,
		    'name' => 'gypo'
	    ]);
	    DB::table('hl_shock_type')->insert([
		    'id' => 3,
		    'name' => 'cardio'
	    ]);
	    DB::table('hl_shock_type')->insert([
		    'id' => 4,
		    'name' => 'bacteria'
	    ]);
	    DB::table('hl_shock_type')->insert([
		    'id' => 5,
		    'name' => 'nervo'
	    ]);
	    DB::table('hl_shock_type')->insert([
		    'id' => 6,
		    'name' => 'other'
	    ]);
	    DB::table('hl_init_final')->insert([
		    'id' => 1,
		    'name' => 'start'
	    ]);
	    DB::table('hl_init_final')->insert([
		    'id' => 2,
		    'name' => 'end'
	    ]);

	    $handle = fopen(__DIR__ . '/hl_pations.txt', 'r');
	    while ($pation = fscanf($handle, "%d\t%d\t%d\t%d\t%d\t%d\t%d\t%d\t%d\t%d\t%d\t%d\t%d\t%d\t%d\t%d\t%d\t%d\t%d\t%d\t%d\n")) {
		    DB::table('hl_pations')->insert([
			    'id' => $pation[0],
			    'age' => $pation[1],
			    'height' => $pation[2],
			    'sex_id' => $pation[3],
			    'survival_id' => $pation[4],
			    'shock_type_id' => $pation[5],
			    'sp' => $pation[6],
			    'map' => $pation[7],
			    'hr' => $pation[8],
			    'dp' => $pation[9],
			    'mvp' => $pation[10],
			    'bsa' => $pation[11],
			    'ci' => $pation[12],
			    'at' => $pation[13],
			    'mct' => $pation[14],
			    'uo' => $pation[15],
			    'pvi' => $pation[16],
			    'rci' => $pation[17],
			    'hgb' => $pation[18],
			    'hct' => $pation[19],
			    'init_final_id' => $pation[20]
		    ]);
	    }
	    fclose($handle);
    }
}
