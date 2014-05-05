<?php
/**
 * namespace para nosso modulo Core\Service
 */

namespace Core\Service;

use Doctrine\ORM\EntityManager;
use Zend\Stdlib\Hydrator\ClassMethods;


/**
 * Class AbstractService
 * @package Core\Service
 * Classe Responsável pela manipulação de dados, como inserir alterar e excluir registros.
 * @author Winston Hanun Junior <ceo@sisdeve.com.br> skype ceo_sisdeve
 * @copyright (c) 2014, Winston Hanun Junior
 * @link http://www.sisdeve.com.br
 * @version V0.1

 */
abstract class AbstractService
{
    /**
     * @var EntityManager
     */
    protected $em;
    /**
     * @var
     */
    protected $entity; // Nome da Entidade

    /**
     * @param EntityManager $em
     */
    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function save(Array $data = array())
    {
        if (isset($data['id'])){

            $entity = $this->em->getReference($this->entity, $data['id']);

            $hydrator = new ClassMethods();
            $hydrator->hydrate($data, $entity);

        }else{
            $entity = new $this->entity($data);
        }

        $this->em->persist($entity);
        $this->em->flush();

        return $entity;
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function remove(Array $data = array())
    {
        $entity = $this->em->getRepository($this->entity)->findOneBy($data);

        if ($entity){
            $this->em->remove($entity);
            $this->em->flush();

            return $entity;
        }
    }
}