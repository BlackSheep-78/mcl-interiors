<?php
// Simulate a database or static data source
$articles = [
    1 => [
        'title' => 'Ceci est le titre',
        'date' => ['day' => '01', 'month' => '01', 'year' => '2022'],
        'author' => [
            'name' => 'Le nom',
            'surname' => 'Le prénom',
            'position' => 'Ceci est la fonction dans l\'entreprise'
        ],
        'keyword' => ['Mot clé 1', 'Mot clé 2', 'Mot clé 3'],
        'content' => [
            'Ceci est le premier paragraphe.',
            'Ceci est le deuxième paragraphe.'
        ],
        'picture' => 'https://access.link.to/one/image.jpg'
    ],
    2 => [
        'title' => 'Un autre titre',
        'date' => ['day' => '15', 'month' => '02', 'year' => '2022'],
        'author' => [
            'name' => 'John',
            'surname' => 'Doe',
            'position' => 'Chief Editor'
        ],
        'keyword' => ['Inspiration', 'Design', 'Trends'],
        'content' => [
            'This is a paragraph of content.',
            'Here is another part of the content.'
        ],
        'picture' => 'https://access.link.to/another/image.jpg'
    ],
    3 => [
        'title' => 'Un autre article intéressant',
        'date' => ['day' => '25', 'month' => '03', 'year' => '2022'],
        'author' => [
            'name' => 'Jane',
            'surname' => 'Smith',
            'position' => 'Designer'
        ],
        'keyword' => ['Architecture', 'Modern', 'Furniture'],
        'content' => [
            'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
        ],
        'picture' => 'https://access.link.to/a/third/image.jpg'
    ]
];

// Check if the 'article' parameter is provided and valid
if (isset($_GET['article']) && is_numeric($_GET['article'])) {
    $articleId = (int)$_GET['article'];

    // Check if the article exists
    if (isset($articles[$articleId])) {
        // Return the article data as JSON
        header('Content-Type: application/json');
        echo json_encode($articles[$articleId]);
    } else {
        // If article is not found
        http_response_code(404);
        echo json_encode(['error' => 'Article not found']);
    }
} else {
    // If 'article' parameter is not set or invalid
    http_response_code(400);
    echo json_encode(['error' => 'Invalid or missing article ID']);
}
?>
