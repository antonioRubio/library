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
		$books = array(
			array('name' => 'example1', 'isbn' => '123'),
			array('name' => 'example2', 'isbn' => '456'),
			array('name' => 'example3', 'isbn' => '789'),
			array('name' => 'example4', 'isbn' => '000')
		);
		foreach($books as $book) {
			Book::create($book);
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