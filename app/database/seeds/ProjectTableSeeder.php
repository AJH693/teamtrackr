<?php  

class ProjectTableSeeder extends Seeder {

	public function run() {

		DB::table('project')->delete();

		Project::create([
			'id' => 1,
			'name' => 'project1'
		]);

	}

}