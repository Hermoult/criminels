<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Temoignages
 *
 * @ORM\Table(name="temoignages")
 * @ORM\Entity
 */
class Temoignages
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_temoignage", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTemoignage;

    /**
     * @var string
     *
     * @ORM\Column(name="localisation_t", type="string", length=255, nullable=false)
     */
    private $localisationT;

    /**
     * @var string
     *
     * @ORM\Column(name="nature_t", type="text", length=0, nullable=false)
     */
    private $natureT;

    /**
     * @var string
     *
     * @ORM\Column(name="temoin_t", type="string", length=255, nullable=false)
     */
    private $temoinT;

    /**
     * @var string|null
     *
     * @ORM\Column(name="numero_tel_temoin_t", type="string", length=255, nullable=true)
     */
    private $numeroTelTemoinT;

    /**
     * @var string|null
     *
     * @ORM\Column(name="adresse_temoin_t", type="string", length=255, nullable=true)
     */
    private $adresseTemoinT;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_s", type="date", nullable=false)
     */
    private $dateS;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="date", nullable=false)
     */
    private $createdAt;

    /**
     * @var string
     *
     * @ORM\Column(name="created_by", type="string", length=45, nullable=false)
     */
    private $createdBy;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="date", nullable=false)
     */
    private $updatedAt;

    /**
     * @var string
     *
     * @ORM\Column(name="updated_by", type="string", length=45, nullable=false)
     */
    private $updatedBy;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Entity\Recherches", inversedBy="temoignagesIdTemoignage")
     * @ORM\JoinTable(name="signalements",
     *   joinColumns={
     *     @ORM\JoinColumn(name="temoignages_id_temoignage", referencedColumnName="id_temoignage")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="recherches_id_r", referencedColumnName="id_r")
     *   }
     * )
     */
    private $recherchesIdR;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->recherchesIdR = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get idTemoignage.
     *
     * @return int
     */
    public function getIdTemoignage()
    {
        return $this->idTemoignage;
    }

    /**
     * Set localisationT.
     *
     * @param string $localisationT
     *
     * @return Temoignages
     */
    public function setLocalisationT($localisationT)
    {
        $this->localisationT = $localisationT;

        return $this;
    }

    /**
     * Get localisationT.
     *
     * @return string
     */
    public function getLocalisationT()
    {
        return $this->localisationT;
    }

    /**
     * Set natureT.
     *
     * @param string $natureT
     *
     * @return Temoignages
     */
    public function setNatureT($natureT)
    {
        $this->natureT = $natureT;

        return $this;
    }

    /**
     * Get natureT.
     *
     * @return string
     */
    public function getNatureT()
    {
        return $this->natureT;
    }

    /**
     * Set temoinT.
     *
     * @param string $temoinT
     *
     * @return Temoignages
     */
    public function setTemoinT($temoinT)
    {
        $this->temoinT = $temoinT;

        return $this;
    }

    /**
     * Get temoinT.
     *
     * @return string
     */
    public function getTemoinT()
    {
        return $this->temoinT;
    }

    /**
     * Set numeroTelTemoinT.
     *
     * @param string|null $numeroTelTemoinT
     *
     * @return Temoignages
     */
    public function setNumeroTelTemoinT($numeroTelTemoinT = null)
    {
        $this->numeroTelTemoinT = $numeroTelTemoinT;

        return $this;
    }

    /**
     * Get numeroTelTemoinT.
     *
     * @return string|null
     */
    public function getNumeroTelTemoinT()
    {
        return $this->numeroTelTemoinT;
    }

    /**
     * Set adresseTemoinT.
     *
     * @param string|null $adresseTemoinT
     *
     * @return Temoignages
     */
    public function setAdresseTemoinT($adresseTemoinT = null)
    {
        $this->adresseTemoinT = $adresseTemoinT;

        return $this;
    }

    /**
     * Get adresseTemoinT.
     *
     * @return string|null
     */
    public function getAdresseTemoinT()
    {
        return $this->adresseTemoinT;
    }

    /**
     * Set dateS.
     *
     * @param \DateTime $dateS
     *
     * @return Temoignages
     */
    public function setDateS($dateS)
    {
        $this->dateS = $dateS;

        return $this;
    }

    /**
     * Get dateS.
     *
     * @return \DateTime
     */
    public function getDateS()
    {
        return $this->dateS;
    }

    /**
     * Set createdAt.
     *
     * @param \DateTime $createdAt
     *
     * @return Temoignages
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt.
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set createdBy.
     *
     * @param string $createdBy
     *
     * @return Temoignages
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * Get createdBy.
     *
     * @return string
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Set updatedAt.
     *
     * @param \DateTime $updatedAt
     *
     * @return Temoignages
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt.
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set updatedBy.
     *
     * @param string $updatedBy
     *
     * @return Temoignages
     */
    public function setUpdatedBy($updatedBy)
    {
        $this->updatedBy = $updatedBy;

        return $this;
    }

    /**
     * Get updatedBy.
     *
     * @return string
     */
    public function getUpdatedBy()
    {
        return $this->updatedBy;
    }

    /**
     * Add recherchesIdR.
     *
     * @param \Entity\Recherches $recherchesIdR
     *
     * @return Temoignages
     */
    public function addRecherchesIdR(\Entity\Recherches $recherchesIdR)
    {
        $this->recherchesIdR[] = $recherchesIdR;

        return $this;
    }

    /**
     * Remove recherchesIdR.
     *
     * @param \Entity\Recherches $recherchesIdR
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeRecherchesIdR(\Entity\Recherches $recherchesIdR)
    {
        return $this->recherchesIdR->removeElement($recherchesIdR);
    }

    /**
     * Get recherchesIdR.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRecherchesIdR()
    {
        return $this->recherchesIdR;
    }
}
