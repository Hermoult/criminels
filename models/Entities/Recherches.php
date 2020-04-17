<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Recherches
 *
 * @ORM\Table(name="recherches")
 * @ORM\Entity
 */
class Recherches
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_r", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idR;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_r", type="string", length=255, nullable=false)
     */
    private $nomR;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_r", type="string", length=255, nullable=false)
     */
    private $prenomR = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_naissance_r", type="date", nullable=false)
     */
    private $dateNaissanceR;

    /**
     * @var string
     *
     * @ORM\Column(name="signe_distinctif_r", type="string", length=255, nullable=false)
     */
    private $signeDistinctifR;

    /**
     * @var string|null
     *
     * @ORM\Column(name="profil_psy_r", type="text", length=0, nullable=true)
     */
    private $profilPsyR;

    /**
     * @var int
     *
     * @ORM\Column(name="niveau_accreditation", type="integer", nullable=false)
     */
    private $niveauAccreditation;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_photo_r", type="string", length=255, nullable=false)
     */
    private $nomPhotoR;

    /**
     * @var string|null
     *
     * @ORM\Column(name="informations_r", type="text", length=0, nullable=true)
     */
    private $informationsR;

    /**
     * @var string
     *
     * @ORM\Column(name="derniere_adresse_r", type="string", length=255, nullable=false)
     */
    private $derniereAdresseR;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="date", nullable=false)
     */
    private $createdAt;

    /**
     * @var string
     *
     * @ORM\Column(name="created_by", type="string", length=255, nullable=false)
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
     * @ORM\Column(name="updated_by", type="string", length=255, nullable=false)
     */
    private $updatedBy;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Entity\Recherches", inversedBy="recherchesIdR")
     * @ORM\JoinTable(name="acolytes",
     *   joinColumns={
     *     @ORM\JoinColumn(name="recherches_id_r", referencedColumnName="id_r")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="recherches_id_r1", referencedColumnName="id_r")
     *   }
     * )
     */
    private $recherchesIdR1;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Entity\Temoignages", mappedBy="recherchesIdR")
     */
    private $temoignagesIdTemoignage;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->recherchesIdR1 = new \Doctrine\Common\Collections\ArrayCollection();
        $this->temoignagesIdTemoignage = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get idR.
     *
     * @return int
     */
    public function getIdR()
    {
        return $this->idR;
    }

    /**
     * Set nomR.
     *
     * @param string $nomR
     *
     * @return Recherches
     */
    public function setNomR($nomR)
    {
        $this->nomR = $nomR;

        return $this;
    }

    /**
     * Get nomR.
     *
     * @return string
     */
    public function getNomR()
    {
        return $this->nomR;
    }

    /**
     * Set prenomR.
     *
     * @param string $prenomR
     *
     * @return Recherches
     */
    public function setPrenomR($prenomR)
    {
        $this->prenomR = $prenomR;

        return $this;
    }

    /**
     * Get prenomR.
     *
     * @return string
     */
    public function getPrenomR()
    {
        return $this->prenomR;
    }

    /**
     * Set dateNaissanceR.
     *
     * @param \DateTime $dateNaissanceR
     *
     * @return Recherches
     */
    public function setDateNaissanceR($dateNaissanceR)
    {
        $this->dateNaissanceR = $dateNaissanceR;

        return $this;
    }

    /**
     * Get dateNaissanceR.
     *
     * @return \DateTime
     */
    public function getDateNaissanceR()
    {
        return $this->dateNaissanceR;
    }

    /**
     * Set signeDistinctifR.
     *
     * @param string $signeDistinctifR
     *
     * @return Recherches
     */
    public function setSigneDistinctifR($signeDistinctifR)
    {
        $this->signeDistinctifR = $signeDistinctifR;

        return $this;
    }

    /**
     * Get signeDistinctifR.
     *
     * @return string
     */
    public function getSigneDistinctifR()
    {
        return $this->signeDistinctifR;
    }

    /**
     * Set profilPsyR.
     *
     * @param string|null $profilPsyR
     *
     * @return Recherches
     */
    public function setProfilPsyR($profilPsyR = null)
    {
        $this->profilPsyR = $profilPsyR;

        return $this;
    }

    /**
     * Get profilPsyR.
     *
     * @return string|null
     */
    public function getProfilPsyR()
    {
        return $this->profilPsyR;
    }

    /**
     * Set niveauAccreditation.
     *
     * @param int $niveauAccreditation
     *
     * @return Recherches
     */
    public function setNiveauAccreditation($niveauAccreditation)
    {
        $this->niveauAccreditation = $niveauAccreditation;

        return $this;
    }

    /**
     * Get niveauAccreditation.
     *
     * @return int
     */
    public function getNiveauAccreditation()
    {
        return $this->niveauAccreditation;
    }

    /**
     * Set nomPhotoR.
     *
     * @param string $nomPhotoR
     *
     * @return Recherches
     */
    public function setNomPhotoR($nomPhotoR)
    {
        $this->nomPhotoR = $nomPhotoR;

        return $this;
    }

    /**
     * Get nomPhotoR.
     *
     * @return string
     */
    public function getNomPhotoR()
    {
        return $this->nomPhotoR;
    }

    /**
     * Set informationsR.
     *
     * @param string|null $informationsR
     *
     * @return Recherches
     */
    public function setInformationsR($informationsR = null)
    {
        $this->informationsR = $informationsR;

        return $this;
    }

    /**
     * Get informationsR.
     *
     * @return string|null
     */
    public function getInformationsR()
    {
        return $this->informationsR;
    }

    /**
     * Set derniereAdresseR.
     *
     * @param string $derniereAdresseR
     *
     * @return Recherches
     */
    public function setDerniereAdresseR($derniereAdresseR)
    {
        $this->derniereAdresseR = $derniereAdresseR;

        return $this;
    }

    /**
     * Get derniereAdresseR.
     *
     * @return string
     */
    public function getDerniereAdresseR()
    {
        return $this->derniereAdresseR;
    }

    /**
     * Set createdAt.
     *
     * @param \DateTime $createdAt
     *
     * @return Recherches
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
     * @return Recherches
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
     * @return Recherches
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
     * @return Recherches
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
     * Add recherchesIdR1.
     *
     * @param \Entity\Recherches $recherchesIdR1
     *
     * @return Recherches
     */
    public function addRecherchesIdR1(\Entity\Recherches $recherchesIdR1)
    {
        $this->recherchesIdR1[] = $recherchesIdR1;

        return $this;
    }

    /**
     * Remove recherchesIdR1.
     *
     * @param \Entity\Recherches $recherchesIdR1
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeRecherchesIdR1(\Entity\Recherches $recherchesIdR1)
    {
        return $this->recherchesIdR1->removeElement($recherchesIdR1);
    }

    /**
     * Get recherchesIdR1.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRecherchesIdR1()
    {
        return $this->recherchesIdR1;
    }

    /**
     * Add temoignagesIdTemoignage.
     *
     * @param \Entity\Temoignages $temoignagesIdTemoignage
     *
     * @return Recherches
     */
    public function addTemoignagesIdTemoignage(\Entity\Temoignages $temoignagesIdTemoignage)
    {
        $this->temoignagesIdTemoignage[] = $temoignagesIdTemoignage;

        return $this;
    }

    /**
     * Remove temoignagesIdTemoignage.
     *
     * @param \Entity\Temoignages $temoignagesIdTemoignage
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeTemoignagesIdTemoignage(\Entity\Temoignages $temoignagesIdTemoignage)
    {
        return $this->temoignagesIdTemoignage->removeElement($temoignagesIdTemoignage);
    }

    /**
     * Get temoignagesIdTemoignage.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTemoignagesIdTemoignage()
    {
        return $this->temoignagesIdTemoignage;
    }

    public function hydrate(array $donnees)
    {
            foreach ($donnees as $key => $value) {
                    $method = 'set'.ucfirst($key);

                    if (method_exists($this, $method)) {
                            $this->$method($value);
                    }
            }
    }
}
