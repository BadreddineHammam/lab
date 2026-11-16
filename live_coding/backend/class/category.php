<?php 
require_once __DIR__ . "/category_abstract_interface.php" ;

class category extends category_abs 
{
    public function get_detail() :string 
    {
        return "the name is " . $this->get_name() . "<br>" . "the id is " . $this->get_id() ; 
    }
}

?>