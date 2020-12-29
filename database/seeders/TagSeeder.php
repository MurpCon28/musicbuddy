<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $tag = new Tag();
      $tag->name = "Electric Guitar";
      $tag->save();

      $tag = new Tag();
      $tag->name = "Acoustic Guitar";
      $tag->save();

      $tag = new Tag();
      $tag->name = "Electric Bass";
      $tag->save();

      $tag = new Tag();
      $tag->name = "Acoustic Bass";
      $tag->save();

      $tag = new Tag();
      $tag->name = "Rock";
      $tag->save();

      $tag = new Tag();
      $tag->name = "Blues";
      $tag->save();

      $tag = new Tag();
      $tag->name = "Jazz/Funk";
      $tag->save();

      $tag = new Tag();
      $tag->name = "Metal";
      $tag->save();

      $tag = new Tag();
      $tag->name = "Quick";
      $tag->save();

      $tag = new Tag();
      $tag->name = "Long";
      $tag->save();

      $tag = new Tag();
      $tag->name = "Amp";
      $tag->save();

      $tag = new Tag();
      $tag->name = "Fender";
      $tag->save();

      $tag = new Tag();
      $tag->name = "Gibson";
      $tag->save();

      $tag = new Tag();
      $tag->name = "Rolland";
      $tag->save();

      $tag = new Tag();
      $tag->name = "Boss";
      $tag->save();
    }
}
