<?php
/**
 * namespace para nosso modulo Core\View\Helper
 */

namespace Core\View\Helper;


/**
 * class MenuAtivoView
 * Responsavel por deixar o menu ativo quando selecionado
 * @author Winston Hanun Junior <ceo@sisdeve.com.br> skype ceo_sisdeve
 * @copyright (c) 2014, Winston Hanun Junior
 * @link http://www.sisdeve.com.br
 * @version V0.1
 */


use Zend\View\Helper\AbstractHelper;
use Zend\Http\Request;

class MenuAtivoView extends AbstractHelper
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function __invoke($url_menu = '')
    {
        return $this->request->getUri()->getPath() == $url_menu ? 'class="active"' : '';
    }
}