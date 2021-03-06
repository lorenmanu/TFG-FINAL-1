<?php

namespace DemandaBundle\Entity;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Demanda
 *
 * @ORM\Table(name="demanda")
 * @ORM\Entity
 * @UniqueEntity(
*     fields={"nombre"},
*     message="El nombre ya existe."
* )
 */
class Demanda
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
     * @ORM\Column(name="nombre", type="string", length=255, precision=0, scale=0, nullable=false, unique=true)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="autor", type="string", length=255, precision=0, scale=0, nullable=false, unique=false)
     */
    private $autor;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="text", precision=0, scale=0, nullable=false, unique=false)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="condiciones", type="text", precision=0, scale=0, nullable=false, unique=false)
     */
    private $condiciones;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaInicio", type="datetime", precision=0, scale=0, nullable=false, unique=false)
     */
    private $fechaInicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaFin", type="datetime", precision=0, scale=0, nullable=false, unique=false)
     */
    private $fechaFin;

    /**
     * @var string
     *
     * @ORM\Column(name="contacto", type="string", length=255, precision=0, scale=0, nullable=false, unique=false)
     */
    private $contacto;

    /**
     * @var string
     *
     * @ORM\Column(name="brochure", type="string", precision=0, scale=0, nullable=false, unique=false)
     */
    private $brochure;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="ComentarioBundle\Entity\Comentario", inversedBy="")
     * @ORM\JoinTable(name="demanda_comentario",
     *   joinColumns={
     *     @ORM\JoinColumn(name="demanda_id", referencedColumnName="id", onDelete="CASCADE")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="comentario_id", referencedColumnName="id", onDelete="CASCADE")
     *   }
     * )
     */
    private $comentarios;

    /**
     * @var \AreaBundle\Entity\Area
     *
     * @ORM\ManyToOne(targetEntity="AreaBundle\Entity\Area")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="area_id", referencedColumnName="id")
     * })
     */
    private $area;

    /**
     * @var \RamaBundle\Entity\Rama
     *
     * @ORM\ManyToOne(targetEntity="RamaBundle\Entity\Rama")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rama_id", referencedColumnName="id")
     * })
     */
    private $rama;

    /**
     * @var \DisciplinaBundle\Entity\Disciplina
     *
     * @ORM\ManyToOne(targetEntity="DisciplinaBundle\Entity\Disciplina")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="disciplina_id", referencedColumnName="id")
     * })
     */
    private $disciplina;

    /**
     * @var \TipoBundle\Entity\Tipo
     *
     * @ORM\ManyToOne(targetEntity="TipoBundle\Entity\Tipo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipo_id", referencedColumnName="id")
     * })
     */
    private $tipo;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->comentarios = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Demanda
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
     * Set autor
     *
     * @param string $autor
     *
     * @return Demanda
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
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Demanda
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set condiciones
     *
     * @param string $condiciones
     *
     * @return Demanda
     */
    public function setCondiciones($condiciones)
    {
        $this->condiciones = $condiciones;

        return $this;
    }

    /**
     * Get condiciones
     *
     * @return string
     */
    public function getCondiciones()
    {
        return $this->condiciones;
    }

    /**
     * Set fechaInicio
     *
     * @param \DateTime $fechaInicio
     *
     * @return Demanda
     */
    public function setFechaInicio($fechaInicio)
    {
        $this->fechaInicio = $fechaInicio;

        return $this;
    }

    /**
     * Get fechaInicio
     *
     * @return \DateTime
     */
    public function getFechaInicio()
    {
        return $this->fechaInicio;
    }

    /**
     * Set fechaFin
     *
     * @param \DateTime $fechaFin
     *
     * @return Demanda
     */
    public function setFechaFin($fechaFin)
    {
        $this->fechaFin = $fechaFin;

        return $this;
    }

    /**
     * Get fechaFin
     *
     * @return \DateTime
     */
    public function getFechaFin()
    {
        return $this->fechaFin;
    }

    /**
     * Set contacto
     *
     * @param string $contacto
     *
     * @return Demanda
     */
    public function setContacto($contacto)
    {
        $this->contacto = $contacto;

        return $this;
    }

    /**
     * Get contacto
     *
     * @return string
     */
    public function getContacto()
    {
        return $this->contacto;
    }

    /**
     * Set brochure
     *
     * @param string $brochure
     *
     * @return Demanda
     */
    public function setBrochure($brochure)
    {
        $this->brochure = $brochure;

        return $this;
    }

    /**
     * Get brochure
     *
     * @return string
     */
    public function getBrochure()
    {
        return $this->brochure;
    }

    /**
     * Add comentario
     *
     * @param \ComentarioBundle\Entity\Comentario $comentario
     *
     * @return Demanda
     */
    public function addComentario(\ComentarioBundle\Entity\Comentario $comentario)
    {
        $this->comentarios[] = $comentario;

        return $this;
    }

    /**
     * Remove comentario
     *
     * @param \ComentarioBundle\Entity\Comentario $comentario
     */
    public function removeComentario(\ComentarioBundle\Entity\Comentario $comentario)
    {
        $this->comentarios->removeElement($comentario);
    }

    /**
     * Get comentarios
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getComentarios()
    {
        return $this->comentarios;
    }

    /**
     * Set area
     *
     * @param \AreaBundle\Entity\Area $area
     *
     * @return Oferta
     */
    public function setArea($area)
    {
        if( !($area instanceof \Doctrine\Common\Collections\ArrayCollection) ){
            $this->area = $area;
        }
        else{
              $this->area = $area->get(0);
        }

        return $this;
    }

    /**
     * Get area
     *
     * @return \AreaBundle\Entity\Area
     */
    public function getArea()
    {
      return $this->area;
    }

    /**
     * Set rama
     *
     * @param \RamaBundle\Entity\Rama $rama
     *
     * @return Oferta
     */
    public function setRama($rama = null)
    {
        if( !($rama instanceof \Doctrine\Common\Collections\ArrayCollection) ){
            $this->rama = $rama;
        }
        else{
              $this->rama = $rama->get(0);
        }

        return $this;
    }

    /**
     * Get rama
     *
     * @return \RamaBundle\Entity\Rama
     */
    public function getRama()
    {
      return $this->rama;
    }

    /**
     * Set disciplina
     *
     * @param \DisciplinaBundle\Entity\Disciplina $disciplina
     *
     * @return Oferta
     */
    public function setDisciplina($disciplina = null)
    {
        if( +

            !($disciplina instanceof\Doctrine\Common\Collections\ArrayCollection) ){
            $this->disciplina = $disciplina;
        }
        else{
              $this->disciplina = $disciplina->get(0);
        }
        return $this;
    }

    /**
     * Get disciplina
     *
     * @return \DisciplinaBundle\Entity\Disciplina
     */
    public function getDisciplina()
    {
      return $this->disciplina;
    }


    public function setTipo($tipo = null)
    {
        if( +

            !($tipo instanceof\Doctrine\Common\Collections\ArrayCollection) ){
            $this->tipo = $tipo;
        }
        else{
              $this->tipo = $tipo->get(0);
        }
        return $this;
    }

    /**
     * Get tipo
     *
     * @return \TipoBundle\Entity\Tipo
     */
    public function getTipo()
    {
      return $this->tipo;
    }
}
