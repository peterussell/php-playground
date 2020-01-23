<?php

class Post
{
  public $title;
  public $author;
  public $published;

  public function __construct($title, $author, $published) {
    $this->title = $title;
    $this->author = $author;
    $this->published = $published;
  }
}

$posts = [
  new Post('My first post', 'PWR', true),
  new Post('My second post', 'PWR', true),
  new Post('My third post', 'EMR', true),
  new Post('My fourth post', 'ATR', false)
];

// *** array_filter ***
// Pass in an array and the closure
// The closure returns a boolean to indicate whether to include the item in the
// result.
// $unpublishedPosts = array_filter($posts, function($post) {
//   return !$post->published;
// });

// *** array_map ***
// NB. array_map args are reversed compared to array_filter
// $modified = array_map(function($post) {
//   return ['title' => $post->title];
// }, $posts);

// can also use array_map to convert objects into arrays
// Allows us to access properties on the array, which can't be accessed if
// they're protected properties on the object
$postsAsArray = array_map(function ($post) {
  return (array) $post;
}, $posts);

// *** array_column ***
$titles = array_column($posts, 'title');
$authors = array_column($posts, 'author');

// *** array_column variation. Specifies the name of the key to use for
// the columns.
// eg. this will result in ['My first post' => 'PWR']
$titles2 = array_column($postsAsArray, 'author', 'title');

var_dump($titles2);
