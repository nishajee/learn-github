<?php
//second
include 'book.php';
class Model{
    
    public function getbookdetails(){
        return 
        array
        (
            "xyz"=> new BOOK("first", "nisha sharma", "About model.."),
            "ABC" => new BOOK("second","neha sharma","About book details")
        );
    }
    
    public function getbook($title){
       $all = $this->getbookdetails();
       return $all[$title];
    }
    
}
