<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type = new Type();
        $type->name = "Lesson";
        $type->save();

        $type = new Type();
        $type->name = "Review";
        $type->save();

        $type = new Type();
        $type->name = "Cover";
        $type->save();
    }
}
