<?php

namespace Admin\Entity;

use Core\Entity\AbstractEntity;
use Doctrine\ORM\Mapping as ORM;

/**
 * AdminServicos
 *
 * @ORM\Table(name="admin_servicos")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 * @ORM\Entity(repositoryClass="Admin\Entity\AdminServicosRepository")
 */
class AdminServicos extends AbstractEntity
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
     * @ORM\Column(name="titulo", type="string", length=200, nullable=true)
     */
    private $titulo;

    /**
     * @var string
     *
     * @ORM\Column(name="conteudo", type="text", nullable=true)
     */
    private $conteudo;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="text", nullable=true)
     */
    private $descricao;

    /**
     * @var string
     *
     * @ORM\Column(name="palavra_chaves", type="text", nullable=true)
     */
    private $palavraChaves;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_cadastro", type="datetime", nullable=true)
     */
    private $dataCadastro;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_alteracao", type="datetime", nullable=true)
     */
    private $dataAlteracao;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=true)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="foto", type="string", length=100, nullable=true)
     */
    private $foto;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_pai", type="integer", nullable=true)
     */
    private $idPai = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="views", type="integer", nullable=true)
     */
    private $views;

    /**
     * @var integer
     *
     * @ORM\Column(name="clicks", type="integer", nullable=true)
     */
    private $clicks;

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
     * Set titulo
     *
     * @param string $titulo
     * @return AdminServicos
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string 
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set conteudo
     *
     * @param string $conteudo
     * @return AdminServicos
     */
    public function setConteudo($conteudo)
    {
        $this->conteudo = $conteudo;

        return $this;
    }

    /**
     * Get conteudo
     *
     * @return string 
     */
    public function getConteudo()
    {
        return $this->conteudo;
    }

    /**
     * Set descricao
     *
     * @param string $descricao
     * @return AdminServicos
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get descricao
     *
     * @return string 
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set palavraChaves
     *
     * @param string $palavraChaves
     * @return AdminServicos
     */
    public function setPalavraChaves($palavraChaves)
    {
        $this->palavraChaves = $palavraChaves;

        return $this;
    }

    /**
     * Get palavraChaves
     *
     * @return string 
     */
    public function getPalavraChaves()
    {
        return $this->palavraChaves;
    }

    /**
     * Set dataCadastro
     *
     * @param \DateTime $dataCadastro
     * @ORM\PrePersist
     * @return AdminServicos
     */
    public function setDataCadastro()
    {
        $this->dataCadastro = new \DateTime('now');

        return $this;
    }

    /**
     * Get dataCadastro
     *
     * @return \DateTime 
     */
    public function getDataCadastro()
    {
        return $this->dataCadastro;
    }

    /**
     * Set dataAlteracao
     *
     * @param \DateTime $dataAlteracao
     * @ORM\PreUpdate
     * @return AdminServicos
     */
    public function setDataAlteracao()
    {
        $this->dataAlteracao = new \DateTime('now');

        return $this;
    }

    /**
     * Get dataAlteracao
     *
     * @return \DateTime 
     */
    public function getDataAlteracao()
    {
        return $this->dataAlteracao;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return AdminServicos
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set foto
     *
     * @param string $foto
     * @return AdminServicos
     */
    public function setFoto($foto)
    {
        $this->foto = $foto;

        return $this;
    }

    /**
     * Get foto
     *
     * @return string 
     */
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * Set idPai
     *
     * @param integer $idPai
     * @return AdminServicos
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
     * Set views
     *
     * @param integer $views
     * @return AdminServicos
     */
    public function setViews($views)
    {
        $this->views = $views;

        return $this;
    }

    /**
     * Get views
     *
     * @return integer 
     */
    public function getViews()
    {
        return $this->views;
    }

    /**
     * Set clicks
     *
     * @param integer $clicks
     * @return AdminServicos
     */
    public function setClicks($clicks)
    {
        $this->clicks = $clicks;

        return $this;
    }

    /**
     * Get clicks
     *
     * @return integer 
     */
    public function getClicks()
    {
        return $this->clicks;
    }

    /**
     * Set idAdmin
     *
     * @param integer $idAdmin
     * @return AdminServicos
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
