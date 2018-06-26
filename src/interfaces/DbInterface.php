<?php
/**
 * Created by PhpStorm.
 * User: mad
 * Date: 26.06.18
 * Time: 16:17
 */

namespace Mad\Interfaces;

/**
 * Class DbInterface
 * @package Mad\Interfaces
 * Interface for DB
 */
interface DbInterface
{
    /**
     *
     */
    public function connect();

    /**
     *
     */
    public function select();

    /**
     *
     */
    public function insert();

    /**
     *
     */
    public function delete();

    /**
     *
     */
    public function update();

    /**
     *
     */
    public function getDataFromRows();

    /**
     *
     */
    public function asArray();

    /**
     *
     */
    public function one();

}