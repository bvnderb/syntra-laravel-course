{{-- 

WO NM excercise
Maak een nieuwe post (view) aan... (/resources/views/post.blade.php) X
Zorg voor een Navigatie die linked naar de /posts/{{id}} (Dynamic Routing with Wildcards) X
En zorg dat enkel de juiste post zichtbaar wordt op het scherm... ?
Style ook een beetje...(TW) /
isset($post)-> no post, or not found...
$posts = [
        1 => [
            'title' => 'Getting Started with Laravel',
            'content' => 'Laravel is a web application framework with expressive, elegant syntax...',
            'date' => '2025-01-15'
        ],
        2 => [
            'title' => 'Mastering Blade Templates',
            'content' => 'Blade is the simple, yet powerful templating engine provided with Laravel...',
            'date' => '2025-01-20'
        ],
        3 => [
            'title' => 'The Power of Eloquent ORM',
            'content' => 'Eloquent is an object-relational mapper that makes it enjoyable to interact with your database...',
            'date' => '2025-01-25'
        ] 
        
--}}

<h2>{{ $post['title'] }}</h2>
<p><strong>Date:</strong> {{ $post['date'] }}</p>
<p>{{ $post['content'] }}</p>
 
 
 