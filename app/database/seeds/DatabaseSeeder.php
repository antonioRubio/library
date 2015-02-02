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