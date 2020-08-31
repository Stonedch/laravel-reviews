<?php

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    private const TABLE_NAME = 'roles';
    private const JSON_PATH = 'database/data/roles.json';

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
            Role::create(array(
                'id' => $row->id ?? NULL,

                'name' => $row->name,
                'slug' => $row->slug,
            ));
        }
    }
}
