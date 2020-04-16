<?php

namespace Adrien;

use Doctrine\ORM\Mapping as ORM;

/**
 * Agents
 *
 * @ORM\Table(name="agents")
 * @ORM\Entity
 */
class Agents
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_agents", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAgents;

    /**
     * @var string
     *
     * @ORM\Column(name="pseudo_a", type="string", length=255, nullable=false)
     */
    private $pseudoA;

    /**
     * @var string
     *
     * @ORM\Column(name="mot_de_passe_a", type="string", length=255, nullable=false)
     */
    private $motDePasseA;

    /**
     * @var int
     *
     * @ORM\Column(name="niveau_accreditation_a", type="integer", nullable=false)
     */
    private $niveauAccreditationA;



    /**
     * Get idAgents.
     *
     * @return int
     */
    public function getIdAgents()
    {
        return $this->idAgents;
    }

    /**
     * Set pseudoA.
     *
     * @param string $pseudoA
     *
     * @return Agents
     */
    public function setPseudoA($pseudoA)
    {
        $this->pseudoA = $pseudoA;

        return $this;
    }

    /**
     * Get pseudoA.
     *
     * @return string
     */
    public function getPseudoA()
    {
        return $this->pseudoA;
    }

    /**
     * Set motDePasseA.
     *
     * @param string $motDePasseA
     *
     * @return Agents
     */
    public function setMotDePasseA($motDePasseA)
    {
        $this->motDePasseA = $motDePasseA;

        return $this;
    }

    /**
     * Get motDePasseA.
     *
     * @return string
     */
    public function getMotDePasseA()
    {
        return $this->motDePasseA;
    }

    /**
     * Set niveauAccreditationA.
     *
     * @param int $niveauAccreditationA
     *
     * @return Agents
     */
    public function setNiveauAccreditationA($niveauAccreditationA)
    {
        $this->niveauAccreditationA = $niveauAccreditationA;

        return $this;
    }

    /**
     * Get niveauAccreditationA.
     *
     * @return int
     */
    public function getNiveauAccreditationA()
    {
        return $this->niveauAccreditationA;
    }
}
