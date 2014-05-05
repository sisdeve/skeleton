<?php

namespace Admin\Entity;

use Core\Entity\AbstractEntity;
use Doctrine\ORM\Mapping as ORM;

/**
 * AdminClientes
 *
 * @ORM\Table(name="admin_clientes")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 * @ORM\Entity(repositoryClass="Admin\Entity\AdminClientesRepository")
 */
class AdminClientes extends AbstractEntity
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
     * @ORM\Column(name="nome_fantasia", type="string", length=100, nullable=true)
     */
    private $nomeFantasia;

    /**
     * @var string
     *
     * @ORM\Column(name="razao_social", type="string", length=45, nullable=true)
     */
    private $razaoSocial;

    /**
     * @var string
     *
     * @ORM\Column(name="cpf_cnpj", type="string", length=45, nullable=true)
     */
    private $cpfCnpj;

    /**
     * @var string
     *
     * @ORM\Column(name="rg_ie", type="string", length=45, nullable=true)
     */
    private $rgIe;

    /**
     * @var string
     *
     * @ORM\Column(name="site", type="string", length=100, nullable=true)
     */
    private $site;

    /**
     * @var string
     *
     * @ORM\Column(name="contato", type="string", length=45, nullable=true)
     */
    private $contato;

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
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=45, nullable=true)
     */
    private $email;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=true)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="id_admin", type="string", length=45, nullable=true)
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
     * Set nomeFantasia
     *
     * @param string $nomeFantasia
     * @return AdminClientes
     */
    public function setNomeFantasia($nomeFantasia)
    {
        $this->nomeFantasia = $nomeFantasia;

        return $this;
    }

    /**
     * Get nomeFantasia
     *
     * @return string 
     */
    public function getNomeFantasia()
    {
        return $this->nomeFantasia;
    }

    /**
     * Set razaoSocial
     *
     * @param string $razaoSocial
     * @return AdminClientes
     */
    public function setRazaoSocial($razaoSocial)
    {
        $this->razaoSocial = $razaoSocial;

        return $this;
    }

    /**
     * Get razaoSocial
     *
     * @return string 
     */
    public function getRazaoSocial()
    {
        return $this->razaoSocial;
    }

    /**
     * Set cpfCnpj
     *
     * @param string $cpfCnpj
     * @return AdminClientes
     */
    public function setCpfCnpj($cpfCnpj)
    {
        $this->cpfCnpj = $cpfCnpj;

        return $this;
    }

    /**
     * Get cpfCnpj
     *
     * @return string 
     */
    public function getCpfCnpj()
    {
        return $this->cpfCnpj;
    }

    /**
     * Set rgIe
     *
     * @param string $rgIe
     * @return AdminClientes
     */
    public function setRgIe($rgIe)
    {
        $this->rgIe = $rgIe;

        return $this;
    }

    /**
     * Get rgIe
     *
     * @return string 
     */
    public function getRgIe()
    {
        return $this->rgIe;
    }

    /**
     * Set site
     *
     * @param string $site
     * @return AdminClientes
     */
    public function setSite($site)
    {
        $this->site = $site;

        return $this;
    }

    /**
     * Get site
     *
     * @return string 
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * Set contato
     *
     * @param string $contato
     * @return AdminClientes
     */
    public function setContato($contato)
    {
        $this->contato = $contato;

        return $this;
    }

    /**
     * Get contato
     *
     * @return string 
     */
    public function getContato()
    {
        return $this->contato;
    }

    /**
     * Set telefone
     *
     * @param string $telefone
     * @return AdminClientes
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
     * @return AdminClientes
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
     * Set dataCadastro
     *
     * @param \DateTime $dataCadastro
     * @ORM\PrePersist
     * @return AdminClientes
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
     * @return AdminClientes
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
     * Set email
     *
     * @param string $email
     * @return AdminClientes
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
     * Set status
     *
     * @param integer $status
     * @return AdminClientes
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
     * Set idAdmin
     *
     * @param string $idAdmin
     * @return AdminClientes
     */
    public function setIdAdmin($idAdmin)
    {
        $this->idAdmin = $idAdmin;

        return $this;
    }

    /**
     * Get idAdmin
     *
     * @return string 
     */
    public function getIdAdmin()
    {
        return $this->idAdmin;
    }
}
