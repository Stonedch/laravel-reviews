<?php

use App\Models\Review;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ReviewsTableSeeder extends Seeder
{
    private const TABLE_NAME = 'reviews';
    private const JSON_PATH = 'database/data/reviews.json';

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
            Review::create([
                'id' => $row->id ?? NULL,

                'product_id' => $row->product_id,
                'user_id' => $row->user_id ?? NULL,
                'status_id' => $row->status_id,

                'score' => $row->score,
                'name' => $row->name ?? NULL,
                'positive' => $row->positive ?? NULL,
                'negative' => $row->negative ?? NULL,

                'created_at' => $row->created_at ?? Carbon::now(),
                'updated_at' => $row->updated_at ?? Carbon::now(),
            ]);
        }
    }
}
