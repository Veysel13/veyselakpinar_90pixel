<?php
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1, 10) as $index)
        {
            $data = array('top_category'=>$index,
                'name' => "deneme_".rand(10,100),
                "created_at"=>date("Y-m-d h:i:s"),
                "updated_at"=>date("Y-m-d h:i:s"));
            DB::table('categories')->insert($data);
        }

    }
}
