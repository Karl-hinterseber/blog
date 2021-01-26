<?php
echo 'Hello world';

require 'app/persistences/blogPostData.php';

$tenLastPosts= lastBlogPosts($dbh);
var_dump($tenLastPosts);