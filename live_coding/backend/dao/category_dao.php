<?php
require_once __DIR__ . "/../class/category.php" ;


class category_dao
{
    private string $file ;
    public function __construct(string $file_11)
    {
        $this->file = $file_11 ;
    }
    public function get_all() :array
    {
        $data_dao = file_get_contents($this->file);

        $data_dao_php = json_decode($data_dao,true) ;
        if(is_array($data_dao_php) === false)
        {
            throw new RuntimeException("the data has not been transformed i mean data_dao_php ") ;
        }
        $data_cotegorized = [] ;
        foreach($data_dao_php as $u)
        {
            $data_cotegorized[] = new category($u["id"] ,$u["name"]); 
        }
        return $data_cotegorized ;
    }
    public function add(string $name) :array
    {
        $data_dao_1 = $this->get_all() ;
        $ids = [] ;
        foreach($data_dao_1 as $u_1)
        {
            if(strcasecmp($u_1->get_name() ,$name) === 0 )
            {
                throw new Exception("there is a dublicate here");
            }
            $ids[] = $u_1->get_id() ;
        }

        $category_new[] = new category($name , empty($ids) ? 1 : max($ids) + 1 );
        
        $data_dao_1[] = $category_new ;

        $data_to_php = [] ;
        foreach($data_dao_1 as $element)
        {
            $data_to_php[] = [
                "id" => $element->get_id() ,
                "name" => $element->get_name() ,
            ];
        }
        if(is_array($data_to_php) === false )
        {
            throw new RuntimeException("data_to_php issue , i think it is not array");
        }
        $data_dao_1_json = json_encode($data_to_php) ;

        if(file_put_contents($data_dao_1_json, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) === false)
        {
            throw new RuntimeException("put content problem of data_dao_1_json");
        }
        return $category_new ;
    }
}


?>