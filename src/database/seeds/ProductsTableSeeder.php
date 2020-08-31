<?php

use App\Models\Products;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    private const TABLE_NAME = 'products';
    private const JSON_PATH = 'database/data/products.json';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table(self::TABLE_NAME)->delete();

        $json = File::get(self::JSON_PATH);
        $data = json_decode($json);

        foreach ($data as $row) {
            Products::create([
                'id' => $row->id ?? NULL,

                'name' => $row->name,
                'slug' => $row->slug ?? NULL,
                'picture' => $row->picture ?? NULL,
                'description' => $row->description ?? NULL,
                'price' => $row->price,

                'created_at' => $row->created_at ?? Carbon::now(),
                'updated_at' => $row->updated_at ?? Carbon::now(),
            ]);
        }
    }
}
