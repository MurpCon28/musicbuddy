<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\County;
use App\Models\Gig;

class GigSeeder extends Seeder
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

      $antrim = County::where('name', "Antrim")->first();
      $armagh = County::where('name', "Armagh")->first();
      $carlow = County::where('name', "Carlow")->first();
      $cavan = County::where('name', "Cavan")->first();
      $clare = County::where('name', "Clare")->first();
      $cork = County::where('name', "Cork")->first();
      $derry = County::where('name', "Derry")->first();
      $donegal = County::where('name', "Donegal")->first();
      $down = County::where('name', "Down")->first();
      $dublin = County::where('name', "Dublin")->first();
      $fermanagh = County::where('name', "Fermanagh")->first();
      $galway = County::where('name', "Galway")->first();
      $kerry = County::where('name', "Kerry")->first();
      $kildare = County::where('name', "Kildare")->first();
      $kilkenny = County::where('name', "Kilkenny")->first();
      $laois = County::where('name', "Laois")->first();
      $leitrim = County::where('name', "Leitrim")->first();
      $limerick = County::where('name', "Limerick")->first();
      $longford = County::where('name', "Longford")->first();
      $louth = County::where('name', "Louth")->first();
      $mayo = County::where('name', "Mayo")->first();
      $meath = County::where('name', "Meath")->first();
      $monaghan = County::where('name', "Monaghan")->first();
      $offaly = County::where('name', "Offaly")->first();
      $rosscommon = County::where('name', "Rosscommon")->first();
      $sligo = County::where('name', "Sligo")->first();
      $tipperary = County::where('name', "Tipperary")->first();
      $tyrone = County::where('name', "Tyrone")->first();
      $waterford = County::where('name', "Waterford")->first();
      $westmeath = County::where('name', "Westmeath")->first();
      $wexford = County::where('name', "Wexford")->first();
      $wicklow = County::where('name', "Wicklow")->first();

      $gig = new Gig();
      $gig->image = "the-scratch.png";
      $gig->bandName = "The Scratch";
      $gig->genre = "Acoustic Rock";
      $gig->location = "Olympia Theatre";
      $gig->dateTime = '2021-05-28 19:00:00';
      $gig->price = 23;
      $gig->county_id = $dublin->id;
      $gig->user_id = $johnham->id;
      $gig->save();

      $gig = new Gig();
      $gig->image = "the-boston-mules.png";
      $gig->bandName = "The Boston Mules";
      $gig->genre = "Indie Rock";
      $gig->location = "Crane Lane Theatre";
      $gig->dateTime = '2021-08-14 20:30:00';
      $gig->price = 60;
      $gig->county_id = $cork->id;
      $gig->user_id = $martyschwartz->id;
      $gig->save();

      $gig = new Gig();
      $gig->image = "green-ape.png";
      $gig->bandName = "Green Apes";
      $gig->genre = "Rock";
      $gig->location = "Dolan’s Pub";
      $gig->dateTime = '2021-10-04 20:30:00';
      $gig->price = 15;
      $gig->county_id = $limerick->id;
      $gig->user_id = $conormurphy->id;
      $gig->save();

      $gig = new Gig();
      $gig->image = "jamie-harrison.png";
      $gig->bandName = "Jamie Harrison";
      $gig->genre = "Rock";
      $gig->location = "Sin é’";
      $gig->dateTime = '2021-12-20 21:30:00';
      $gig->price = 30;
      $gig->county_id = $cork->id;
      $gig->user_id = $jamieharrison->id;
      $gig->save();

      $gig = new Gig();
      $gig->image = "manic.png";
      $gig->bandName = "Manic";
      $gig->genre = "Indie Rock";
      $gig->location = "Roisin Dubh";
      $gig->dateTime = '2021-08-15 20:00:00';
      $gig->price = 25;
      $gig->county_id = $galway->id;
      $gig->user_id = $scottbass->id;
      $gig->save();

      $gig = new Gig();
      $gig->image = "funk-bros.png";
      $gig->bandName = "Funk Bros";
      $gig->genre = "Jazz/Funk";
      $gig->location = "O’Sullivan’s Courthouse";
      $gig->dateTime = '2021-07-25 18:00:00';
      $gig->price = 45;
      $gig->county_id = $kerry->id;
      $gig->user_id = $oscarhancock->id;
      $gig->save();

      $gig = new Gig();
      $gig->image = "gojira.png";
      $gig->bandName = "Gojira";
      $gig->genre = "Metal";
      $gig->location = "Cyprus Avenue";
      $gig->dateTime = '2021-10-31 20:45:00';
      $gig->price = 35;
      $gig->county_id = $cork->id;
      $gig->user_id = $johnham->id;
      $gig->save();

    }
}
