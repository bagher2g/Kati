<?php
namespace App\App\Models ;
// src/Product.php
use Doctrine\ORM\Mapping as ORM;
class Author
{
    /**
     * @var int
     */
    protected $id;
    /**
     * @var string
     */
    protected $name;

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
}
