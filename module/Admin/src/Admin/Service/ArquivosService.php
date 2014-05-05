<?php
/**
 * namespace para nosso modulo Admin\Service
 */

namespace Admin\Service;
use Core\Service\AbstractService;
use Doctrine\ORM\EntityManager;

/**
 * class ArquivosService
 * Responsavel por gerenciar as movimentações na entidade AdminAdmin
 * @author Winston Hanun Junior <ceo@sisdeve.com.br> skype ceo_sisdeve
 * @copyright (c) 2014, Winston Hanun Junior
 * @link http://www.sisdeve.com.br
 * @version V0.1
 */
class ArquivosService extends AbstractService
{
    public function __construct(EntityManager $em)
    {
        $this->entity = 'Admin\Entity\AdminArquivos';
        parent::__construct($em);
    }

} 