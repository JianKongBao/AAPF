<?php

/**
 * 脚手架
 *
 * @author neeke@php.net
 */
class Models_Scaffold extends Models
{
    private static $_instance = NULL;

    /**
     * @param $table
     * @param $primary
     *
     * @return Models_Scaffold
     */
    final public static function getInstance($table, $primary)
    {
        if (!isset(self::$_instance) || !self::$_instance instanceof self) {
            self::$_instance = new self($table, $primary);
        }

        return self::$_instance;
    }

    function __construct($table, $primary)
    {
        parent::__construct();
        $this->_table   = $table;
        $this->_primary = $primary;
    }

}