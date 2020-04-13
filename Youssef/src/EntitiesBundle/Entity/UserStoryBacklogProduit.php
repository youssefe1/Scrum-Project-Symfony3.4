<?php

namespace EntitiesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserStoryBacklogProduit
 *
 * @ORM\Table(name="user_story_backlog_produit", indexes={@ORM\Index(name="ide_backlog_feat", columns={"ide_backlog_feat"})})
 * @ORM\Entity
 */
class UserStoryBacklogProduit
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_user_story_backlog_produit", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUserStoryBacklogProduit;

    /**
     * @var string
     *
     * @ORM\Column(name="user_story_bp", type="text", length=65535, nullable=false)
     */
    private $userStoryBp;

    /**
     * @var integer
     *
     * @ORM\Column(name="priority_bp", type="integer", nullable=false)
     */
    private $priorityBp;

    /**
     * @var integer
     *
     * @ORM\Column(name="etat", type="integer", nullable=false)
     */
    private $etat = '0';

    /**
     * @var \BacklogProduit
     *
     * @ORM\ManyToOne(targetEntity="BacklogProduit")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ide_backlog_feat", referencedColumnName="id_backlog_feature")
     * })
     */
    private $ideBacklogFeat;


}

