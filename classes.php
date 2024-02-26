<?php 
class Blog {
    private $title;
    private $owner;
    private $posts = array();

    function __construct($title) {
        $this->title = $title;
    }

    function getTitle(){
        return $this->title;
    }

    public function getNomPropriete(){

    }
    public function setNomPropriete(){

    }

    function setOwner($owner){
        $this->owner = $owner;
    }

    function getOwner(){
        return $this->owner;
    }

    function addPost($post){
        $this->posts[] = $post;
    }

    function getPosts(){
        return $this->posts;
    }
}

class Post {
    private $title;
    private $message;
    private $author;
    private $date;
    private $views;
    private $comments = array();

    function __construct(){}

    public function getNomPropriete(){

    }

    public function setNomPropriete(){

    }

    function setTitle($title){
        $this->title = $title;
    }

    function getTitle(){
        return $this->title;
    }
    
    function setMessage($message){
        $this->message = $message;
    }

    function getMessage(){
        return $this->message;
    }

    function setViews($views){
        $this->views = $views;
    }

    function getViews(){
        return $this->views;
    }

    function setDate($date){
        $this->date = $date;
    }

    function getDate(){
        return $this->date;
    }

    function setAuthor($author){
        $this->author = $author;
    }

    function getAuthor(){
        return $this->author;
    }

    function addComment($comment){
        $this->comments[] = $comment;
    }

    function getComments(){
        return $this->comments;
    }
}

class Comment {
    private $message;
    private $author;
    private $date;

    function __construct($message,$author,$date){
        $this->message = $message;
        $this->author = $author;
        $this->date = $date;
    }


    public function getNomPropriete(){

    }

    public function setNomPropriete(){

    }
    function setMessage($message){
        $this->message = $message;
    }

    function getMessage(){
        return $this->message;
    }

    function setAuthor($author){
        $this->author = $author;
    }

    function getAuthor(){
        return $this->author;
    }

    function setDate($date){
        $this->date = $date;
    }

    function getDate(){
        return $this->date;
    }

}

class User {
    private $username;
    private $firstname;
    private $lastname;

    function __construct($username,$firstname,$lastname){
        $this->username = $username;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }

    function getUsername(){
        return $this->username;
    }

    function getFirstname(){
        return $this->firstname;
    }

    function getLastname(){
        return $this->lastname;
    }

    public function getNomPropriete(){

    }

    public function setNomPropriete(){

    }

}

