<?php

require __DIR__.'/vendor/autoload.php';

Use App\Blog\Article;
Use App\Blog\Category;

$categories = [
    new Category(1, 'foo', null),
    new Category(2, 'bar', null),
    new Category(3, 'baz', null),
];
dump($categories);

$articles =  [
    new Article(1, 'lorem', 'lorem ipsum', $categories[0]),
    new Article(2, 'Ipsum', 'Ipsum ipsum', $categories[1]),
    new Article(1, 'Sit', 'Sit sit', $categories[0]),
];

dump($articles);

foreach ($articles as $article) {

    echo $article->getTitle();
    echo '<br>';
    echo $article->getCategory()->getName();
    echo '<br>';
}
foreach ($articles as $article) {
    echo "title: {$article->getTitle()}";
    echo '<br>';
    // echo "category:{$article->getCategory()->getName()}";
    // echo '<br>';
    $category = $article->getCategory();
    echo "category : {$category->getName()}";

    foreach ($category->getArticles() as $article) {
        echo "same category title: {$article->getTitle()}";

    }
} 