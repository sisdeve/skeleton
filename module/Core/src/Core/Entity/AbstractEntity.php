<?php
/**
 * namespace para nosso modulo Core\Entity
 */

namespace Core\Entity;

use Zend\Stdlib\Hydrator\ClassMethods;



/**
 * class AbstractEntity
 * @package Core\Entity
 * Classe Responsável pela abstração das entidades
 * @author Winston Hanun Junior <ceo@sisdeve.com.br> skype ceo_sisdeve
 * @copyright (c) 2014, Winston Hanun Junior
 * @link http://www.sisdeve.com.br
 * @version V0.1
 *
 */
abstract class AbstractEntity {

    /**
     * @param array $options
     */
    public function __construct(Array $options = array())
    {
        $hydrator = new ClassMethods();
        $hydrator->hydrate($options, $this);
    }

    /**
     * @return array
     */
    public function toArray()
    {
        $hydrator = new ClassMethods();
        return $hydrator->extract($this);
    }

}