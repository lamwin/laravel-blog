// /database/migration/seeds/ProjectsTableSeeder.php

<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
	public function run()
	{
		DB::table('categories')->delete();

		$categories = array(
			['id' => 1, 'name' => 'National Stuff', 'slug' => 'national-stuff', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 2, 'name' => 'International Problems', 'slug' => 'international-prob', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 3, 'name' => 'Sports Related Blogs', 'slug' => 'sport-related', 'created_at' => new DateTime, 'updated_at' => new DateTime],
		);

		DB::table('categories')->insert($categories);
	}
}