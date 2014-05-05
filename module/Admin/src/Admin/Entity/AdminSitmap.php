<?php

namespace Admin\Entity;

use Core\Entity\AbstractEntity;
use Doctrine\ORM\Mapping as ORM;

/**
 * AdminSitmap
 *
 * @ORM\Table(name="admin_sitmap")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 * @ORM\Entity(repositoryClass="Admin\Entity\AdminSitmapRepository")
 */
class AdminSitmap extends AbstractEntity
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
     * @var \DateTime
     *
     * @ORM\Column(name="lastmod", type="datetime", nullable=true)
     */
    private $lastmod;

    /**
     * @var string
     *
     * @ORM\Column(name="loc", type="string", length=150, nullable=true)
     */
    private $loc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_cadastro", type="datetime", nullable=true)
     */
    private $dataCadastro;



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
     * Set lastmod
     *
     * @param \DateTime $lastmod
     * @return AdminSitmap
     */
    public function setLastmod($lastmod)
    {
        $this->lastmod = $lastmod;

        return $this;
    }

    /**
     * Get lastmod
     *
     * @return \DateTime 
     */
    public function getLastmod()
    {
        return $this->lastmod;
    }

    /**
     * Set loc
     *
     * @param string $loc
     * @return AdminSitmap
     */
    public function setLoc($loc)
    {
        $this->loc = $loc;

        return $this;
    }

    /**
     * Get loc
     *
     * @return string 
     */
    public function getLoc()
    {
        return $this->loc;
    }

    /**
     * Set dataCadastro
     *
     * @param \DateTime $dataCadastro
     * @ORM\PrePersist
     * @return AdminSitmap
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
}
