<?php
    include "class_books.php";
    
    class Novel extends Books {
        var $publisher;
        
        function setPublisher($par) {
            $this -> publisher = $par;
        }
        
        function getPublisher() {
            echo $this -> publisher ."<br />";
        }
        
        // Overriden function setPrice
        function setPrice($par) {
            $this -> price = $par * 2;
        }

    }
    

?>