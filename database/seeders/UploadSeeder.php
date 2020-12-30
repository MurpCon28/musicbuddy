<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Upload;
use App\Models\Type;
use App\Models\Tag;

class UploadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $conormurphy = User::where('name', "Conor Murphy")->first();
      $oscarhancock = User::where('name', "Oscar Hancock")->first();
      $johnham = User::where('name', "John Ham")->first();
      $martyschwartz = User::where('name', "Marty Schwartz")->first();

      $lesson = Type::where('name', "Lesson")->first();
      $review = Type::where('name', "Review")->first();
      $cover = Type::where('name', "Cover")->first();

      $electricguitar = Tag::where('name', "Electric Guitar")->first();
      $acousticguitar = Tag::where('name', "Acoustic Guitar")->first();
      $electricbass = Tag::where('name', "Electric Bass")->first();
      $acousticbass = Tag::where('name', "Acoustic Bass")->first();
      $rock = Tag::where('name', "Rock")->first();
      $blues = Tag::where('name', "Blues")->first();
      $jazzfunk = Tag::where('name', "Jazz/Funk")->first();
      $metal = Tag::where('name', "Metal")->first();
      $quick = Tag::where('name', "Quick")->first();
      $long = Tag::where('name', "Long")->first();
      $amp = Tag::where('name', "Amp")->first();
      $fender = Tag::where('name', "Fender")->first();
      $gibson = Tag::where('name', "Gibson")->first();
      $rolland = Tag::where('name', "Rolland")->first();
      $boss = Tag::where('name', "Boss")->first();

      $upload = new Upload();
      $upload->video = "https://www.youtube.com/embed/WWxD-CK_i6k";
      $upload->title = "Oasis Supersonic Guitar Lesson + Tutorial";
      $upload->description = "Going over how to play this awesome Oasis tune, Supersonic, on electric guitar for you guys today! I'll break down the opening guitar lick and the chords for the song. Le'ts break it down!";
      $upload->tag_id = $electricguitar->id;
      $upload->type_id = $lesson->id;
      $upload->user_id = $martyschwartz->id;
      $upload->save();

      $upload = new Upload();
      $upload->video = "https://www.youtube.com/embed/koR5DILfSSw";
      $upload->title = "The Police - Message in a bottle (bass cover) with tabs";
      $upload->description = "The Police - Message in a bottle (bass cover) with tabs (EADG) Ibanez Roadstar II '83 Japan";
      $upload->tag_id = $electricbass->id;
      $upload->type_id = $cover->id;
      $upload->user_id = $johnham->id;
      $upload->save();

      $upload = new Upload();
      $upload->video = "https://www.youtube.com/embed/st_T934i4RE";
      $upload->title = "90's Grunge Distortion with Big Muff PI Classic Fuzz Pedal";
      $upload->description = "Hey guys! Here's one of the quickest ways to get that great raunchy fuzzy distortion. The classic silver Big Muff PI !!!!  Check it out right here at the only place where I'm making my own new content - MartyMusic! ";
      $upload->tag_id = $rock->id;
      $upload->type_id = $review->id;
      $upload->user_id = $martyschwartz->id;
      $upload->save();
    }
}
