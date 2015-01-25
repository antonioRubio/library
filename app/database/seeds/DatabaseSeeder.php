<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('BooksTableSeeder');
	}

}


class BooksTableSeeder extends Seeder
{
	public function run()
	{
		DB::table('books')->delete();
		DB::table('books')->insert(array(
			array('id' => 1, 'name' => 'example1', 'isbn' => '123', 'created_at' => new DateTime(), 'updated_at' => new DateTime()),
			array('id' => 2, 'name' => 'example2', 'isbn' => '456', 'created_at' => new DateTime(), 'updated_at' => new DateTime()),
			array('id' => 3, 'name' => 'example3', 'isbn' => '789', 'created_at' => new DateTime(), 'updated_at' => new DateTime()),
			array('id' => 4, 'name' => 'example4', 'isbn' => '000', 'created_at' => new DateTime(), 'updated_at' => new DateTime())
		));
	}
}