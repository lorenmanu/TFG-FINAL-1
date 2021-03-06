<?php

namespace AreaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Area
 *
 * @ORM\Table(name="area")
 * @ORM\Entity
 */
class Area
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=100, precision=0, scale=0, nullable=false, unique=false)
     */
    private $nombre;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="RamaBundle\Entity\Rama", inversedBy="areas")
     * @ORM\JoinTable(name="area_rama",
     *   joinColumns={
     *     @ORM\JoinColumn(name="area_id", referencedColumnName="id", onDelete="CASCADE")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="rama_id", referencedColumnName="id", onDelete="CASCADE")
     *   }
     * )
     */
    private $ramas;


    /**
     * Constructor
     */
    public function __construct()
    {
    }

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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Area
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Add rama
     *
     * @param \RamaBundle\Entity\Rama $rama
     *
     * @return Area
     */
    public function addRama(\RamaBundle\Entity\Rama $rama)
    {
        $this->ramas[] = $rama;

        return $this;
    }

    /**
     * Remove rama
     *
     * @param \RamaBundle\Entity\Rama $rama
     */
    public function removeRama(\RamaBundle\Entity\Rama $rama)
    {
        $this->ramas->removeElement($rama);
    }

    /**
     * Get ramas
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRamas()
    {
        return $this->ramas;
    }



    public function __toString(){
      return $this->getNombre();
    }
}
