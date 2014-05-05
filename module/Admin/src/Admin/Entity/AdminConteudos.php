<?php

namespace Admin\Entity;

use Core\Entity\AbstractEntity;
use Doctrine\ORM\Mapping as ORM;

/**
 * AdminConteudos
 *
 * @ORM\Table(name="admin_conteudos")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 * @ORM\Entity(repositoryClass="Admin\Entity\AdminConteudosRepository")
 */
class AdminConteudos extends AbstractEntity
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
     * @ORM\Column(name="titulo", type="string", length=250, nullable=true)
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
     * @var string
     *
     * @ORM\Column(name="fontes", type="string", length=100, nullable=true)
     */
    private $fontes;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=true)
     */
    private $status;

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
     * @var string
     *
     * @ORM\Column(name="autor", type="string", length=100, nullable=true)
     */
    private $autor;

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
     * @return AdminConteudos
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
     * @return AdminConteudos
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
     * @return AdminConteudos
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
     * @return AdminConteudos
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
     * Set fontes
     *
     * @param string $fontes
     * @return AdminConteudos
     */
    public function setFontes($fontes)
    {
        $this->fontes = $fontes;

        return $this;
    }

    /**
     * Get fontes
     *
     * @return string 
     */
    public function getFontes()
    {
        return $this->fontes;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return AdminConteudos
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
     * Set dataCadastro
     *
     * @param \DateTime $dataCadastro
     * @ORM\PrePersist
     * @return AdminConteudos
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
     * @return AdminConteudos
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
     * Set views
     *
     * @param integer $views
     * @return AdminConteudos
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
     * @return AdminConteudos
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
     * Set autor
     *
     * @param string $autor
     * @return AdminConteudos
     */
    public function setAutor($autor)
    {
        $this->autor = $autor;

        return $this;
    }

    /**
     * Get autor
     *
     * @return string 
     */
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * Set idAdmin
     *
     * @param integer $idAdmin
     * @return AdminConteudos
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
