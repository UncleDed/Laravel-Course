<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Course</title>
</head>
<body>
@php

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;

//for ($i = 1; $i <= 5; $i++){
//    $category = new Category();
//    $category->title = "Horror";
//    $category->slug = "Horror #". $i;
//    $category->save();
//}


//$updateCategory = Category::orderBy('id', 'asc')->first();
//$updateCategory->title = "Horror First";
//$updateCategory->save();


//$deleteLastCat = Category::orderBy('id', 'desc')->first();
//$deleteLastCat->delete();


//for ($i = 1; $i <= 10; $i++){
//    $post = new Post();
//    $post->title = "Comment";
//    $post->slug = "Comment #". $i;
//    $post->body = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";
//    $post->category_id = 12;
//    $post->save();
//}


//$updatePost = Post::orderBy('id', 'asc')->first();
//$updatePost->title = "Updated comment";
//$updatePost->slug = "Updated comment";
//$updatePost->body = "Ut enim ad minim veniam, quis nostrud exercitation.";
//$updatePost->category_id = 13;
//$updatePost->save();


//$deleteLastPost = Post::orderBy('id', 'desc')->first();
//$deleteLastPost->delete();


//for ($i = 1; $i <= 10; $i++){
//    $tag = new Tag();
//    $tag->title = "Tag";
//    $tag->slug = "Tag #". $i;
//    $tag->save();
//}


//$posts = Post::all();
//foreach ($posts as $post){
//    $post->tags()->sync(
//        array_map(fn() => rand(1, 10), range(1, 3))
//    );
//}

@endphp
</body>
</html>
