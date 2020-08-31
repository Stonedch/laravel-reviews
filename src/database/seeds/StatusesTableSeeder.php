<?php

use App\Models\Status;
use Illuminate\Database\Seeder;

class StatusesTableSeeder extends Seeder
{
    private const TABLE_NAME = 'statuses';
    private const JSON_PATH = 'database/data/statuses.json';

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
            Status::create(array(
                'id' => $row->id ?? NULL,

                'name' => $row->name,
                'slug' => $row->slug,
                'color_bg' => $row->color_bg ?? NULL,
                'color_fg' => $row->color_fg ?? NULL,
            ));
        }
    }
}
