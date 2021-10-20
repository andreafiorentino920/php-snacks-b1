<?php 
// Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
$posts = [
    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];
?>

<h1>Post</h1>
<ul>
	<?php foreach($posts as $classiPosts => $listaPosts) { ?>
		<li>
			<h3><?php echo $classiPosts; ?></h3>
			<ul>
				<?php foreach($listaPosts as $post) { ?>
                <li>
                    <h3><?php echo $post["title"]; ?></h3>
                    <p><?php echo $post["author"]; ?></p>
                    <p><?php echo $post["text"]; ?></p>
                </li>
				<?php } ?>
			</ul>
		</li>
	<?php } ?>
</ul>