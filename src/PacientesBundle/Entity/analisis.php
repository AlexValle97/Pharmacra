<?php

namespace PacientesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * analisis
 *
 * @ORM\Table(name="analisis")
 * @ORM\Entity(repositoryClass="PacientesBundle\Repository\analisisRepository")
 */
class analisis
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}

