<?php
/**
 * Created by IntelliJ IDEA.
 * User: Marti
 * Date: 18/09/2018
 * Time: 19:23
 */

namespace Controllers;

use Models\PostModel;
use Models\UserModel;

/**
 * Class AdminController
 * @package Controllers
 */
class AdminController {

    private $userManager;
    private $postManager;

    /**
     * AdminController constructor.
     */
    public function __construct()
    {
        $this->userManager = new UserModel();
        $this->postManager = new PostModel();
    }

    /**
     * Get data and passing to HomeView
     */
    function home(){
        $postNumber = count($this->postManager->getPosts()->fetchAll());
        require 'views/back/home.php';
    }

    /**
     * Get all users and passing to Users View
     */
    function getUsers(){
        $users = $this->userManager->getUsers();
        require 'views/back/users.php';
    }

    /**
     * Create user
     * @throws \Exception
     */
    function createUser(){
        $newUser = $this->userManager->createUser($_POST['username'], hash('sha256', $_POST['password']));
        if($newUser === false){
            throw new \Exception("Impossible d'ajouter l'utilisateur");
        } else {
            header('Location: /admin/users');
        }
    }

    /**
     * Send action to model to remove user
     * @param $id
     * @throws \Exception
     */
    function removeUser($id){
        $deleteUser = $this->userManager->removeUser($id);
        if($deleteUser === false){
            throw new \Exception("Impossible de supprimer l'utilisateur");
        } else {
            header('Location: /admin/users');
        }
    }


    /**
     * Get all posts and passing data to posts view
     */
    function getPosts(){
        $posts = $this->postManager->getPosts()->fetchAll();
        require 'views/back/posts.php';
    }

    /**
     * Get one post to edit
     * @param $id
     */
    function getPost($id){
        $post = $this->postManager->getPost($id);
        require 'views/back/single.php';
    }

    /**
     *  Redirect to view for creating user
     */
    function newPost(){
        require 'views/back/create.php';
    }

    /**
     * Get TinyMCE data and send to Model (INSERT)
     * @throws \Exception
     */
    function createPost(){
        $allowTags = '<p><strong><em><u><h1><h2><h3><h4><h5><h6><img>';
        $allowTags .= '<li><ol><ul><span><div><br><ins><del>';
        if (isset($_FILES['image'])) {
            $errors = array();
            $file_name = $_FILES['image']['name'];
            $file_size =$_FILES['image']['size'];
            $file_tmp =$_FILES['image']['tmp_name'];
            $array = explode('.', $_FILES['image']['name']);
            $file_ext=strtolower(end($array));
            $extensions = array('jpeg', 'jpg', 'png');
            if (in_array($file_ext, $extensions) === false) {
                $errors[] = "extension not allowed, please choose a JPEG or PNG file";
            }
            if ($file_size > 2097152) {
                $errors[] = 'File size must be inferior to 2 MB';
            }
            if (empty($errors) == true) {
                move_uploaded_file($file_tmp, 'uploads/'.$file_name);
                echo "Success";
            } else {
                print_r($errors);
            }
        }
        $episode = $this->postManager->createPost($_POST['title'], strip_tags(stripslashes($_POST['content']), $allowTags), $file_name);
        if($episode === false){
            throw new \Exception("Impossible d'ajouter l'article");
        } else {
            header('Location: /admin/posts');
        }
    }

    /**
     * Get TinyMCE data and send to Model (UPDATE)
     * @param $id
     * @throws \Exception
     */
    function editPost($id){
        $allowTags = '<p><strong><em><u><h1><h2><h3><h4><h5><h6><img>';
        $allowTags .= '<li><ol><ul><span><div><br><ins><del>';
        if (isset($_FILES['image'])) {
            $errors = array();
            $file_name = $_FILES['image']['name'];
            $file_size =$_FILES['image']['size'];
            $file_tmp =$_FILES['image']['tmp_name'];
            $array = explode('.', $_FILES['image']['name']);
            $file_ext=strtolower(end($array));
            $extensions = array('jpeg', 'jpg', 'png');
            if (in_array($file_ext, $extensions) === false) {
                $errors[] = "extension not allowed, please choose a JPEG or PNG file";
            }
            if ($file_size > 2097152) {
                $errors[] = 'File size must be inferior to 2 MB';
            }
            if (empty($errors) == true && isset($file_name)) {
                move_uploaded_file($file_tmp, 'uploads/'.$file_name);
                echo "Success";
            } else {
                print_r($errors);
            }
        }
        $episode = $this->postManager->updatePost($id, $_POST['title'], strip_tags(stripslashes($_POST['content']), $allowTags), $file_name);
        if($episode === false){
            throw new \Exception("Impossible d'éditer l'article");
        } else {
            header('Location: /admin/posts/'.$id);
        }
    }

    /**
     * Get post deleted and send to Model (DELETE)
     * @param $id
     * @throws \Exception
     */
    function removePost($id){
        $deletePost = $this->postManager->removePost($id);
        if($deletePost === false){
            throw new \Exception("Impossible de supprimer le post");
        } else {
            header('Location: /admin/posts');
        }
    }
}