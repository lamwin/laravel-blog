// /database/migration/seeds/BlogsTableSeeder.php

<?php

use Illuminate\Database\Seeder;

class BlogsTableSeeder extends Seeder
{
	public function run()
	{
		DB::table('blogs')->delete();

		$blogs = array(
			['id' => 1, 'title' => 'California has no water', 'slug' => 'california-no-water', 'category_id' => 1, 'body' => 'This is the first blog', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 2, 'title' => 'Texas is the fattest state in America', 'slug' => 'texas-fat', 'category_id' => 1, 'body' => 'This is the second blog', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 3, 'title' => 'French government making a push for green energy!', 'slug' => 'french-green-energy', 'category_id' => 2, 'body' => 'This is the third blog', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 4, 'title' => 'ISIS advances toward Russia', 'slug' => 'isis-advance-russia', 'category_id' => 2, 'body' => 'This is the fourth blog', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 5, 'title' => 'Cavs swept Celtics in the first round.', 'slug' => 'cavs-swept-celtics', 'category_id' => 3, 'body' => 'This is the fifth blog', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 6, 'title' => 'Ray Rice will not be returning to the NFL', 'slug' => 'ray-rice-nfl', 'category_id' => 3, 'body' => 'This is the sixth blog', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 7, 'title' => 'Paul George returns with number 13', 'slug' => 'paul-george-return', 'category_id' => 3, 'body' => 'This is the seventh blog', 'created_at' => new DateTime, 'updated_at' => new DateTime],
		);

		DB::table('blogs')->insert($blogs);
	}
}