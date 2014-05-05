<?php

namespace Admin\Entity;

use Core\Entity\AbstractEntity;
use Doctrine\ORM\Mapping as ORM;

/**
 * AdminArquivos
 *
 * @ORM\Table(name="admin_arquivos")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 * @ORM\Entity(repositoryClass="Admin\Entity\AdminArquivosRepository")
 */
class AdminArquivos extends AbstractEntity
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=100, nullable=true)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=100, nullable=true)
     */
    private $tipo;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_pai", type="integer", nullable=true)
     */
    private $idPai;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_admin", type="integer", nullable=true)
     */
    private $idAdmin;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nome
     *
     * @param string $nome
     * @return AdminArquivos
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string 
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     * @return AdminArquivos
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set idPai
     *
     * @param integer $idPai
     * @return AdminArquivos
     */
    public function setIdPai($idPai)
    {
        $this->idPai = $idPai;

        return $this;
    }

    /**
     * Get idPai
     *
     * @return integer 
     */
    public function getIdPai()
    {
        return $this->idPai;
    }

    /**
     * Set idAdmin
     *
     * @param integer $idAdmin
     * @return AdminArquivos
     */
    public function setIdAdmin($idAdmin)
    {
        $this->idAdmin = $idAdmin;

        return $this;
    }

    /**
     * Get idAdmin
     *
     * @return integer 
     */
    public function getIdAdmin()
    {
        return $this->idAdmin;
    }
}
