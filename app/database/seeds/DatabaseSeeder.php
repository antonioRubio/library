<?php

class DatabaseSeeder extends Seeder
{

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('BooksTableSeeder');
		$this->call('UsersTableSeeder');
		$this->call('TagsTableSeeder');
		$this->call('TagsBooksTableSeeder');
	}

}


class BooksTableSeeder extends Seeder
{
	public function run()
	{
		$booksNum = 100;
		for ($i = 0; $i < $booksNum; $i++) {
			Book::create(array('name' => "name$i", 'isbn' => "isbn$i"));
		}
	}
}

class UsersTableSeeder extends Seeder
{
	public function run()
	{
		$users = array(
			array('username' => 'antonio', 'password' => Hash::make('antonio'), 'email' => 'antonio@rubio.es'),
			array('username' => 'siso', 'password' => Hash::make('siso'), 'email' => 'siso@bravo.es')
		);
		foreach($users as $user) {
			User::create($user);
		}
	}
}

class TagsTableSeeder extends Seeder
{
	public function run()
	{
		$tags = array(
			array('name' => 'tag1'),
			array('name' => 'tag2')
		);
		foreach($tags as $tag)
			Tag::create($tag);
	}
}

class TagsBooksTableSeeder extends Seeder
{
	public function run()
	{
		$tags = array();
		foreach (Tag::all() as $tag)
			$tags []= $tag->id;
		$books = Book::all();
		foreach ($books as $book)
			$book->tags()->attach($tags);
	}
}