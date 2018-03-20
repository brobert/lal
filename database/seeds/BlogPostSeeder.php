<?php
use Illuminate\Database\Seeder;
use App\Models\BlogPost;


class BlogPostSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BlogPost::truncate();

        factory(BlogPost::class, 50)->create()
            ->each(function ($bp) {
            $bp->save();
        });
    }
}
