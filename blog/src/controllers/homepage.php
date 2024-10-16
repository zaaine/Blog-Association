<?php

namespace Application\Controllers\homepage;

require_once('src/lib/database.php');
require_once('src/model/post.php');

use Application\Lib\Database\DatabaseConnection;
use Application\Model\Post\PostRepository;

class homepage
{
    public function execute()
    {
        $postRepository = new PostRepository();
        $postRepository ->connection = new DatabaseConnection();
        $posts = $postRepository ->getPosts();

        require('templates/homepage.php');
    }
}
