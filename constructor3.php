<?php  
    class demo  
    {  
        public function demo()  
        {  
            echo "Midhila";  
        }  
    }  
      
    class demo1 extends demo  
    {  
        public function __construct()  
        {  
            echo parent::demo();  
            echo "Midhila";  
        }  
    }  
    $obj= new demo1();  
?>  