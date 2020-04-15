<?php
use Doctrine\ORM\Mapping as ORM;

/**
 * Acolytes
 *
 * @ORM\Table(name="acolytes", indexes={@ORM\Index(name="fk_recherches_has_recherches_recherches1_idx", columns={"recherches_id_r"}), @ORM\Index(name="fk_recherches_has_recherches_recherches2_idx", columns={"recherches_id_r1"})})
 * @ORM\Entity
 */
