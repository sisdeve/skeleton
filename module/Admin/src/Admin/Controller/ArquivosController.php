<?php
/**
 * namespace para nosso modulo Admin\Controller
 */

namespace Admin\Controller;


use Core\Controller\AbstractController;

/**
 * class ArquivosController
 * Controller Responsavel por manipular os dados da Entidade Arquivos
 * @author Winston Hanun Junior <ceo@sisdeve.com.br> skype ceo_sisdeve
 * @copyright (c) 2014, Winston Hanun Junior
 * @link http://www.sisdeve.com.br
 * @version V0.1
 */

class ArquivosController extends AbstractController
{

    function __construct()
    {
        $this->form = '';
        $this->controller = 'admin';
        $this->route = 'admin-arquivos/default';
        $this->service = 'Admin\Service\ArquivosService';
        $this->entity = 'Admin\Entity\AdminArquivos';
    }


}