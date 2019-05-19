<?php
namespace App\App\Models ;
/**
 * @Entity @Table(name="contents")
 **/
class CONTENT
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;

    /** @Column(type="string") **/
    protected $type;

    /** @Column(type="integer") **/
    protected $thread_id;

    /**
     * @Column(type="date", nullable=true)
     */


    public function getId()
    {
        return $this->id ;
    }

    public function setType($val)
    {
        $this->type = $val ;
    }

    public function getType()
    {
        return $this->type ;
    }

    public function setThreadId($val)
    {
       $this->thread_id = $val ;
    }

    public function getThreadId()
    {
       return $this->thread_id ;
    }


}
