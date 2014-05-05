Instalação:
=====================

Apos a Instalação deve se criar o arquivo
config/autoload/doctrine_orm.local.php
e coloca o seguinte codigo

<?php

/**
 * Arquivo de configuração da conexão do banco de dados
 * Respnsavel por passar o endereço do banco, usuario do banco, senha do banco, e nome do banco.
 * NÃO ESQUECER DE MUDAR O ENDEREÇO. LOGIN E SENHA E O NOME DO BANCO.
 * @author Winston Hanun Junior <ceo@sisdeve.com.br> skype ceo_sisdeve
 * @copyright (c) 2014, Winston Hanun Junior
 * @link http://www.sisdeve.com.br
 * @version V0.1
 */
return array(
    'doctrine' => array(
        'connection' => array(
            'orm_default' => array(
                'driverClass' => 'Doctrine\DBAL\Driver\PDOMySql\Driver',
                'params' => array(
                    'host'     => 'ENDEREÇO DO BANCO DE DADOS', // ENDEREÇO DO BANCO DE DADOS
                    'port'     => '3306',
                    'user'     => 'USUARIO DO BANCO', // USUARIO DO BANCO
                    'password' => 'SENHA DO BANCO', // SENHA DO BANCO
                    'dbname'   => 'NOME DO BANCO', // NOME DO BANCO
                    'driverOptions' => array(
                        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'"
                    )
                )
            )
        )
    ),
);
