<?php

namespace Controllers;

use Models\PostModel;

/**
 * Class SingleController
 * @package Controllers
 */
class SingleController {

    private $postManager;

    /**
     * SingleController constructor.
     */
    public function __construct(){
        $this->postManager = new PostModel();
    }

    /**
     * Get return data from data to get one post and passing data to view
     * @param $id
     */
    function getPost($id){
        $posts = $this->postManager->getPosts()->fetchAll();
        $post = $this->postManager->getPost($id);
        $total = count($this->postManager->getPosts()->fetchAll());
        $key = array_search($post['id'], array_column($posts, 'id'));
        require 'views/front/single.php';
    }
}