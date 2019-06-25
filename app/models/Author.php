<?php
namespace App\App\Models ;
/**
 * @Entity @Table(name="authors")
 **/
class Author
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;
    /** @Name @Column(type="string") **/
    protected $name ;
    /** @Web @Column(type="string") **/
    protected $web ;

    /**
     * @Column(type="date", nullable=true)
     */

    public function getId()
    {
        return $this->id ;
    }

    public function setName($val)
    {
      $this->name = $val ;
    }

    public function getName()
    {
        return $this->name ;
    }

    public function setWeb($val)
    {
      $this->web = $val ;
    }

    public function getWeb()
    {
        return $this->web ;
    }
}
