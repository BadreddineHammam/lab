<?php
require_once __DIR__ . "/../dao/category_dao.php" ;

class category_service 
{
    public category_dao $file ;

    public function __construct(string $file_12)
    {
        $this->file = new category_dao($file_12);
    }

    public function get_all_service() :category_dao
    {
        $data_service_c = $this->file->get_all() ;
        
    }
}

?>