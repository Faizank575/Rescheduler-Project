<?php
class Books{
    // var $price;
    //private $price;
    private $price;
    private $title;
    private $publisher;
    function setPrice($par){
        $this->price=$par;
    }
    function setTitle($par){
        $this->title=$par;
    }
    function getPrice(){
        echo $this->price;
    }
    function getTitle(){
        echo $this->title;
    }
    function setPublisher($param){
        $this->publisher=$param;
    }
    function getPublisher(){
        echo $this->publisher;
    }  

}


class Novel extends Books{

public function __construct($title,$price,$publisher){
        $this->setPrice($price);
        $this->setTitle($title);
        $this->setPublisher($publisher);
}

function getNovelDetails(){
    $this->getPrice()."<br/>";
    $this->getTitle()."<br/>";
    $this->getPublisher()."<br/>";

}

}

$Alchemist = new Novel("Alchemist",500,"AuthorName");
$Alchemist->getNovelDetails();



?>