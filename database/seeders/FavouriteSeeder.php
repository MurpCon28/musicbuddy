<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Favourite;

class FavouriteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $favourite = new Favourite();
        $favourite->user_id = 1;
        $favourite->upload_id = 1;
        $favourite->save();

        $favourite = new Favourite();
        $favourite->user_id = 2;
        $favourite->upload_id = 1;
        $favourite->save();

        $favourite = new Favourite();
        $favourite->user_id = 4;
        $favourite->upload_id = 2;
        $favourite->save();

        $favourite = new Favourite();
        $favourite->user_id = 3;
        $favourite->upload_id = 3;
        $favourite->save();

        $favourite = new Favourite();
        $favourite->user_id = 5;
        $favourite->upload_id = 7;
        $favourite->save();

        $favourite = new Favourite();
        $favourite->user_id = 2;
        $favourite->upload_id = 3;
        $favourite->save();

        $favourite = new Favourite();
        $favourite->user_id = 5;
        $favourite->upload_id = 4;
        $favourite->save();

        $favourite = new Favourite();
        $favourite->user_id = 2;
        $favourite->upload_id = 8;
        $favourite->save();
    }
}
