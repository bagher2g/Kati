<?php
namespace App\App\Models ;
/**
 * @Entity @Table(name="books")
 **/
class BOOK
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;

    /**
     * @Column(type="date", nullable=true)
     */

    public function getId()
    {
        return $this->id ;
    }


}
