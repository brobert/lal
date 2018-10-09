<?php
use Illuminate\Database\Seeder;
use App\Models\BlogPost;
use App\Models\BlogCategory;
use App\Models\BlogTag;


class BlogPostSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(BlogCategory::class, 10)->create()->each(function ($bc)
        {
            $bc->save();
        });

        factory(BlogTag::class, 100)->create()->each(function ($bt)
        {
            $bt->save();
        });

        factory(BlogPost::class, 50)->create()->each(function ($bp)
        {
            $bp->save();
        });

        // Populate the pivot table
        $tags = BlogTag::all();
        BlogPost::all()->each(function ($post) use ($tags)
        {
            $post->tags()->attach($tags->random(rand(1, 5))->pluck('id')->toArray());
        });
    }
}
