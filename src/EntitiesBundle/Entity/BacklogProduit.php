<?php

namespace EntitiesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BacklogProduit
 *
 * @ORM\Table(name="backlog_produit", indexes={@ORM\Index(name="ide_projet", columns={"ide_projet"})})
 * @ORM\Entity
 */
class BacklogProduit
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_backlog_feature", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idBacklogFeature;

    /**
     * @var string
     *
     * @ORM\Column(name="feature", type="text", length=65535, nullable=false)
     */
    private $feature;

    /**
     * @var \Projets
     *
     * @ORM\ManyToOne(targetEntity="Projets")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ide_projet", referencedColumnName="id_projet")
     * })
     */
    private $ideProjet;


}

