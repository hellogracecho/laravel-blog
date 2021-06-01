<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Post extends Model
{
    public $title; 
    
    public $date;
    
    public $excerpt;
    
    public $body;

    public $slug;

    public function __construct($title, $date, $excerpt, $body, $slug)
    {
        $this->title = $title;
        $this->date = $date;
        $this->excerpt = $excerpt;
        $this->body = $body;
        $this->slug = $slug;
    }

    public static function allPosts() {

        return cache()->rememberForever('posts.all', function() {
            // ** Laravel's Collect function 
            return collect(File::files(resource_path("posts")))
                ->map(fn($file) => YamlFrontMatter::parseFile($file))        
                ->map(fn($document) => new Post(
                        $document->title, 
                        $document->date, 
                        $document->excerpt, 
                        $document->body(),
                        $document->slug
                    ))
                // sort by date
                ->sortByDesc('date');
        });


        // ** array_map is exactly same as Laravel's Helper Function -- collection
        // $posts = array_map(function ($file) {
        //     $document = YamlFrontMatter::parseFile($file);

        //     return new Post(
        //         $document->title, 
        //         $document->date, 
        //         $document->excerpt, 
        //         $document->body(),
        //         $document->slug
        //     );
        // }, $files);
    }

    public static function find($slug) {

        // of all the blog posts, find the one with a slug that matches the one that was required

        return static::allPosts()->firstWhere('slug', $slug);

        // // Validate if the path exist
        // if ( ! file_exists($path = resource_path("posts/{$slug}.html") ) ) {
        //     throw new ModelNotFoundException();
        //     // abort(404);
        // }

        // // ** Use Caching  with unique key + how long to cache (in sec) + function
        // // helper function for time now()->addMinutes(20) 
        // // arrow function: fn() => file_get_contents($path)
        // return cache()->remember("post.{$slug}", 5, function() use($path) {
        //     return file_get_contents($path);
        // });

    }
} 