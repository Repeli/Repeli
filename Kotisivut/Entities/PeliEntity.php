<?php

/**
 * Description of PeliEntity
 *
 * @author Sami
 */
class PeliEntity 
{
    public $id;
    public $name;
    public $type;
    public $image;
    public $review;
    
    function __construct($id, $name, $type, $image, $review) 
    {
        $this->id = $id;
        $this->name = $name;
        $this->type = $type;
        $this->image = $image;
        $this->review = $review;
    }

}

?>