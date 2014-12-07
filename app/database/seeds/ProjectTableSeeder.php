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
			'taskscompleted' => '50',
			'defects' => '10',
			'numWorkers' => '5',
			'storyPoints' => '144',
			'mustPriorityPoints' => '89',
			'shouldPriorityPoints' => '34',
			'couldPriorityPoints' => '19'
		]);

		Project::create([
			'id' => 2,
			'name' => 'Inventory Tracker',
			'teamname' => 'Names',
			'numtasks' => '45',
			'budget' => '100',
			'spent' => '40',
			'taskscompleted' => '5',
			'defects' => '7',
			'numWorkers' => '4',
			'storyPoints' => '144',
			'mustPriorityPoints' => '5',
			'shouldPriorityPoints' => '3',
			'couldPriorityPoints' => '1'
		]);

		Project::create([
			'id' => 3,
			'name' => 'PacMan',
			'teamname' => 'Mavericks',
			'numtasks' => '86',
			'budget' => '200',
			'spent' => '130',
			'taskscompleted' => '55',
			'defects' => '16',
			'numWorkers' => '8',
			'storyPoints' => '233',
			'mustPriorityPoints' => '100',
			'shouldPriorityPoints' => '36',
			'couldPriorityPoints' => '20'
		]);

		Project::create([
			'id' => 4,
			'name' => 'Pig Weight Estimator',
			'teamname' => 'Potatoe',
			'numtasks' => '74',
			'budget' => '62',
			'spent' => '50',
			'taskscompleted' => '21',
			'defects' => '8',
			'numWorkers' => '2',
			'storyPoints' => '89',
			'mustPriorityPoints' => '20',
			'shouldPriorityPoints' => '15',
			'couldPriorityPoints' => '3'
		]);

	}

}