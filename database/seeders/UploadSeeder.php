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
      $scottbass = User::where('name', "Scott Bass")->first();
      $jamieharrison = User::where('name', "Jamie Harrison")->first();
      $jimdunlop = User::where('name', "Jim Dunlop")->first();
      $simabustami = User::where('name', "Sima Bustami")->first();
      $simonhimsworth = User::where('name', "Simon Himsworth")->first();

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

      $upload = new Upload();
      $upload->video = "https://www.youtube.com/embed/W7KWZYNYpFs";
      $upload->title = "Beginner Bass Lesson (Your Very First Steps)";
      $upload->description = "There’s never been a better time to pick up a bass guitar. And in this video I’m going to talk you through everything you’ll need to get started, plus I show you that most difficult of first tasks ie. getting tuned up and staying there.";
      $upload->tag_id = $jazzfunk->id;
      $upload->type_id = $lesson->id;
      $upload->user_id = $scottbass->id;
      $upload->save();

      $upload = new Upload();
      $upload->video = "https://www.youtube.com/embed/zc071euiNQE";
      $upload->title = "The Wind Cries Mary - Jimi Hendrix - by Jamie Harrison";
      $upload->description = "This my version of 'The Wind Cries Mary' by Jimi Hendrix. It is fairly true to the original version for the first half of the song, with more of a swing groove, and then my own solo towards the end.";
      $upload->tag_id = $rock->id;
      $upload->type_id = $cover->id;
      $upload->user_id = $jamieharrison->id;
      $upload->save();

      $upload = new Upload();
      $upload->video = "https://www.youtube.com/embed/x_Okhq3Bnjc";
      $upload->title = "Soundgarden - Jesus Christ Pose (guitar cover)";
      $upload->description = "Line 6 Helix, Lexicon alpha, Adobe Audition, Wondershare Filmora";
      $upload->tag_id = $rock->id;
      $upload->type_id = $cover->id;
      $upload->user_id = $johnham->id;
      $upload->save();

      $upload = new Upload();
      $upload->video = "https://www.youtube.com/embed/E3NC88xGQ_A";
      $upload->title = "Tom Morello Cry Baby Wah - TBM95";
      $upload->description = "Express your own vision in solidarity with one of music's great freedom fighters with the Tom Morello Cry Baby Wah.";
      $upload->tag_id = $rock->id;
      $upload->type_id = $review->id;
      $upload->user_id = $jimdunlop->id;
      $upload->save();

      $upload = new Upload();
      $upload->video = "https://www.youtube.com/embed/7NKzdgnIGrs";
      $upload->title = "Tom Morello Cry Baby Wah - TBM95";
      $upload->description = "My cover of Cherub Rock by Smashing Pumpkins.";
      $upload->tag_id = $rock->id;
      $upload->type_id = $cover->id;
      $upload->user_id = $simabustami->id;
      $upload->save();

      $upload = new Upload();
      $upload->video = "https://www.youtube.com/embed/jMQw4fXZztw";
      $upload->title = "Paranoid Android - Radiohead (Lockdown v2.0 Cover)";
      $upload->description = "Cover of Paranoid Android by Radiohead - Lockdown v2.0";
      $upload->tag_id = $acousticguitar->id;
      $upload->type_id = $cover->id;
      $upload->user_id = $simonhimsworth->id;
      $upload->save();

      $upload = new Upload();
      $upload->video = "https://www.youtube.com/embed/osbnob9ih-c";
      $upload->title = "Billy Corgan's First Look at the Op Amp Big Muff from Electro-Harmonix | Reverb Interview";
      $upload->description = "Smashing Pumpkins frontman Billy Corgan reflects on his first experience with the Electro-Harmonix Big Muff, and how he used the legendary fuzz to shape the sound of the Pumpkin's famed Siamese Dream.";
      $upload->tag_id = $electricguitar->id;
      $upload->type_id = $review->id;
      $upload->user_id = $conormurphy->id;
      $upload->save();

      $upload = new Upload();
      $upload->video = "https://www.youtube.com/embed/jLoPmrHHHJE";
      $upload->title = "Blues Bass Lines: 6 Authentic Formulas That Work Every Time";
      $upload->description = "If you want to play some 12-bar blues, on bass, you’re going to need to know how to get through the form using authentic sounding blues bass lines.";
      $upload->tag_id = $blues->id;
      $upload->type_id = $lesson->id;
      $upload->user_id = $scottbass->id;
      $upload->save();

      $upload = new Upload();
      $upload->video = "https://www.youtube.com/embed/2VbqiCoSTGY";
      $upload->title = "JAZZ BASS GROOVES - Recording Jayme Lewis";
      $upload->description = "Jazz Bass Groove";
      $upload->tag_id = $jazzfunk->id;
      $upload->type_id = $cover->id;
      $upload->user_id = $jimdunlop->id;
      $upload->save();

      $upload = new Upload();
      $upload->video = "https://www.youtube.com/embed/OJHfMLnFQ9s";
      $upload->title = "Boss DS-1 Distortion | Reverb Demo Video";
      $upload->description = "The Boss DS-1 Distortion pedal is a classic used by pros everywhere on both guitar and keyboard. The DS-1 comes with just 3 simple dials, so you can step on, turn up and find your tone with ease.";
      $upload->tag_id = $rock->id;
      $upload->type_id = $review->id;
      $upload->user_id = $conormurphy->id;
      $upload->save();
    }
}
