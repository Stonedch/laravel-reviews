<?php

use App\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    private const TABLE_NAME = 'users';
    private const JSON_PATH = 'database/data/users.json';

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
            User::create([
                'id' => $row->id ?? NULL,

                'name' => $row->name,
                'email' => $row->email,
                'email_verified_at' => $row->email_verified_at ?? Carbon::now(),
                'password' => Hash::make($row->password),

                'created_at' => $row->created_at ?? Carbon::now(),
                'updated_at' => $row->updated_at ?? Carbon::now(),
            ]);
        }
    }
}
