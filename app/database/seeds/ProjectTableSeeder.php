<?php  

class ProjectTableSeeder extends Seeder {

	public function run() {

		DB::table('project')->delete();

		Project::create([
			'id' => 1,
			'name' => 'TeamTrackr',
			'teamname' => 'TeamTrackr',
			'numtasks' => '52',
			'budget' => '0',
			'spent' => '0',
			'taskscompleted' => '50'
		]);

		Project::create([
			'id' => 2,
			'name' => 'Inventory Tracker',
			'teamname' => 'Names',
			'numtasks' => '45',
			'budget' => '100',
			'spent' => '40',
			'taskscompleted' => '5'
		]);

		Project::create([
			'id' => 3,
			'name' => 'PacMan',
			'teamname' => 'Mavericks',
			'numtasks' => '86',
			'budget' => '200',
			'spent' => '130',
			'taskscompleted' => '55'
		]);

		Project::create([
			'id' => 4,
			'name' => 'Pig Weight Estimator',
			'teamname' => 'Potatoe',
			'numtasks' => '74',
			'budget' => '62',
			'spent' => '50',
			'taskscompleted' => '21'
		]);

	}

}