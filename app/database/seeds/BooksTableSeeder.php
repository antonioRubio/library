<?

class BooksTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('books')->delete();



        DB::table('books')->insert(array(
            array('id' => 1, 'name' => 'example1', 'isbn' => '123'),
            array('id' => 2, 'name' => 'example2', 'isbn' => '456'),
            array('id' => 3, 'name' => 'example3', 'isbn' => '789'),
            array('id' => 4, 'name' => 'example4', 'isbn' => '000'),
        ));
    }
}