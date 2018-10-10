<?php

class Albums extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=false)
     */
    public $name;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=false)
     */
    public $author;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    public $genre_id;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('genre_id', 'Genres', 'id', ['alias' => 'Genres']);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'albums';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Albums[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Albums
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
