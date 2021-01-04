<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Comment;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $comment = new Comment();
      $comment->body = "Great video!";
      $comment->user_id = 2;
      $comment->upload_id = 1;
      $comment->save();

      $comment = new Comment();
      $comment->body = "Thanks for the upload.";
      $comment->user_id = 1;
      $comment->upload_id = 1;
      $comment->save();

      $comment = new Comment();
      $comment->body = "Great cover, man!";
      $comment->user_id = 4;
      $comment->upload_id = 2;
      $comment->save();

      $comment = new Comment();
      $comment->body = "Love the sound of the pedal.";
      $comment->user_id = 3;
      $comment->upload_id = 3;
      $comment->save();
    }
}
