<?php

use App\Blog;
use Illuminate\Database\Seeder;

class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $blog = new Blog();
        $blog->id               = 1;
        $blog->title            = "Blog 01";
        $blog->content          = "Nội dung blog 1 Nội dung blog 1";
        $blog->image            = "";
        $blog->date         = "2018-09-15";
        $blog->save();
        $blog = new Blog();
        $blog->id               = 2;
        $blog->title            = "Blog 02";
        $blog->content          = "Nội dung blog 2 Nội dung blog 2";
        $blog->image            = "";
        $blog->date         = "2018-09-15";
        $blog->save();
        $blog = new Blog();
        $blog->id               = 3;
        $blog->title            = "Blog 03";
        $blog->content          = "Nội dung blog 3 Nội dung blog 3";
        $blog->image            = "";
        $blog->date         = "2018-09-15";
        $blog->save();
    }
}
