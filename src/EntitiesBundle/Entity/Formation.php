<?php

namespace EntitiesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formation
 *
 * @ORM\Table(name="formation", indexes={@ORM\Index(name="ide_formateur", columns={"ide_formateur"}), @ORM\Index(name="liste_personne", columns={"liste_personne"})})
 * @ORM\Entity
 */
class Formation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_formation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFormation;

    /**
     * @var string
     *
     * @ORM\Column(name="sujet_formation", type="string", length=200, nullable=false)
     */
    private $sujetFormation;

    /**
     * @var string
     *
     * @ORM\Column(name="liste_personne", type="string", length=255, nullable=false)
     */
    private $listePersonne;

    /**
     * @var string
     *
     * @ORM\Column(name="time_debut", type="string", length=70, nullable=false)
     */
    private $timeDebut;

    /**
     * @var string
     *
     * @ORM\Column(name="time_fin", type="string", length=70, nullable=false)
     */
    private $timeFin;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_formation", type="string", length=150, nullable=false)
     */
    private $nomFormation;

    /**
     * @var string
     *
     * @ORM\Column(name="Date", type="string", length=150, nullable=false)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="ide_formateur", type="string", length=255, nullable=false)
     */
    private $ideFormateur;


}

