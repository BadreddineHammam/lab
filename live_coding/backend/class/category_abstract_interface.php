<?php

abstract class category_abs 
{
    protected int $id ;
    protected string $name ;

    public function __construct(int $id_11 , string $name_11)
    {
       $this->id = $id_11 ;
       $this->name = $name_11 ;
    }
    public function get_id() :int
    {
        return $this->id;
    }

    public function get_name() :string
    {
        return $this->name;
    }

    abstract public function get_detail() :string ;

}

?>