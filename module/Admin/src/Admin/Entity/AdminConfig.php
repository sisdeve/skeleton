<?php

namespace Admin\Entity;

use Core\Entity\AbstractEntity;
use Doctrine\ORM\Mapping as ORM;

/**
 * AdminConfig
 *
 * @ORM\Table(name="admin_config")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 * @ORM\Entity(repositoryClass="Admin\Entity\AdminConfigRepository")
 */
class AdminConfig extends AbstractEntity
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
     * @ORM\Column(name="telefone", type="string", length=15, nullable=true)
     */
    private $telefone;

    /**
     * @var string
     *
     * @ORM\Column(name="celular", type="string", length=15, nullable=true)
     */
    private $celular;

    /**
     * @var string
     *
     * @ORM\Column(name="palavra_chaves", type="text", nullable=true)
     */
    private $palavraChaves;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="text", nullable=true)
     */
    private $descricao;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=100, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="endereco", type="string", length=200, nullable=true)
     */
    private $endereco;

    /**
     * @var string
     *
     * @ORM\Column(name="icon", type="string", length=100, nullable=true)
     */
    private $icon;

    /**
     * @var string
     *
     * @ORM\Column(name="titulo", type="string", length=100, nullable=true)
     */
    private $titulo;

    /**
     * @var string
     *
     * @ORM\Column(name="google_analytics", type="text", nullable=true)
     */
    private $googleAnalytics;

    /**
     * @var string
     *
     * @ORM\Column(name="saudacao", type="text", nullable=true)
     */
    private $saudacao;

    /**
     * @var string
     *
     * @ORM\Column(name="google_webmaster", type="text", nullable=true)
     */
    private $googleWebmaster;

    /**
     * @var string
     *
     * @ORM\Column(name="facebook", type="string", length=100, nullable=true)
     */
    private $facebook;

    /**
     * @var string
     *
     * @ORM\Column(name="twitter", type="string", length=100, nullable=true)
     */
    private $twitter;

    /**
     * @var string
     *
     * @ORM\Column(name="msn", type="string", length=100, nullable=true)
     */
    private $msn;

    /**
     * @var string
     *
     * @ORM\Column(name="google_plus", type="string", length=100, nullable=true)
     */
    private $googlePlus;

    /**
     * @var string
     *
     * @ORM\Column(name="flickr", type="string", length=100, nullable=true)
     */
    private $flickr;

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
     * Set telefone
     *
     * @param string $telefone
     * @return AdminConfig
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;

        return $this;
    }

    /**
     * Get telefone
     *
     * @return string 
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * Set celular
     *
     * @param string $celular
     * @return AdminConfig
     */
    public function setCelular($celular)
    {
        $this->celular = $celular;

        return $this;
    }

    /**
     * Get celular
     *
     * @return string 
     */
    public function getCelular()
    {
        return $this->celular;
    }

    /**
     * Set palavraChaves
     *
     * @param string $palavraChaves
     * @return AdminConfig
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
     * Set descricao
     *
     * @param string $descricao
     * @return AdminConfig
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
     * Set email
     *
     * @param string $email
     * @return AdminConfig
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set endereco
     *
     * @param string $endereco
     * @return AdminConfig
     */
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;

        return $this;
    }

    /**
     * Get endereco
     *
     * @return string 
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * Set icon
     *
     * @param string $icon
     * @return AdminConfig
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * Get icon
     *
     * @return string 
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * Set titulo
     *
     * @param string $titulo
     * @return AdminConfig
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
     * Set googleAnalytics
     *
     * @param string $googleAnalytics
     * @return AdminConfig
     */
    public function setGoogleAnalytics($googleAnalytics)
    {
        $this->googleAnalytics = $googleAnalytics;

        return $this;
    }

    /**
     * Get googleAnalytics
     *
     * @return string 
     */
    public function getGoogleAnalytics()
    {
        return $this->googleAnalytics;
    }

    /**
     * Set saudacao
     *
     * @param string $saudacao
     * @return AdminConfig
     */
    public function setSaudacao($saudacao)
    {
        $this->saudacao = $saudacao;

        return $this;
    }

    /**
     * Get saudacao
     *
     * @return string 
     */
    public function getSaudacao()
    {
        return $this->saudacao;
    }

    /**
     * Set googleWebmaster
     *
     * @param string $googleWebmaster
     * @return AdminConfig
     */
    public function setGoogleWebmaster($googleWebmaster)
    {
        $this->googleWebmaster = $googleWebmaster;

        return $this;
    }

    /**
     * Get googleWebmaster
     *
     * @return string 
     */
    public function getGoogleWebmaster()
    {
        return $this->googleWebmaster;
    }

    /**
     * Set facebook
     *
     * @param string $facebook
     * @return AdminConfig
     */
    public function setFacebook($facebook)
    {
        $this->facebook = $facebook;

        return $this;
    }

    /**
     * Get facebook
     *
     * @return string 
     */
    public function getFacebook()
    {
        return $this->facebook;
    }

    /**
     * Set twitter
     *
     * @param string $twitter
     * @return AdminConfig
     */
    public function setTwitter($twitter)
    {
        $this->twitter = $twitter;

        return $this;
    }

    /**
     * Get twitter
     *
     * @return string 
     */
    public function getTwitter()
    {
        return $this->twitter;
    }

    /**
     * Set msn
     *
     * @param string $msn
     * @return AdminConfig
     */
    public function setMsn($msn)
    {
        $this->msn = $msn;

        return $this;
    }

    /**
     * Get msn
     *
     * @return string 
     */
    public function getMsn()
    {
        return $this->msn;
    }

    /**
     * Set googlePlus
     *
     * @param string $googlePlus
     * @return AdminConfig
     */
    public function setGooglePlus($googlePlus)
    {
        $this->googlePlus = $googlePlus;

        return $this;
    }

    /**
     * Get googlePlus
     *
     * @return string 
     */
    public function getGooglePlus()
    {
        return $this->googlePlus;
    }

    /**
     * Set flickr
     *
     * @param string $flickr
     * @return AdminConfig
     */
    public function setFlickr($flickr)
    {
        $this->flickr = $flickr;

        return $this;
    }

    /**
     * Get flickr
     *
     * @return string 
     */
    public function getFlickr()
    {
        return $this->flickr;
    }

    /**
     * Set idAdmin
     *
     * @param integer $idAdmin
     * @return AdminConfig
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
