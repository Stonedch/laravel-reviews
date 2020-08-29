<?php

use Illuminate\Database\Seeder;
use App\Models\Statuses;

class StatusesTableSeeder extends Seeder {

    private const TABLE_NAME = 'statuses';
    private const JSON_PATH = 'database/data/statuses.json';

    public function run() {
        DB::table(self::TABLE_NAME)->delete();

        $json = File::get(self::JSON_PATH);
        $data = json_decode($json);

        foreach ($data as $row) {
            Statuses::create(array(
                'id' => $row->id ?? NULL,
                'name' => $row->name,
                'slug' => $row->slug,
                'color_bg' => $row->color_bg ?? NULL,
                'color_fg' => $row->color_fg ?? NULL,
            ));
        }
    }

}

