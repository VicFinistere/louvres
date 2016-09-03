<?php
/**
 * Created by PhpStorm.
 * User: zoe
 * Date: 03/09/16
 * Time: 11:53
 */

namespace AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * Class Tarif
 * @package AppBundle\Entity
 */
class Tarif
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */private $id_tarif;
    /**
     * @ORM\Column(type="string")
     */
    private $designation;
    /**
     * @ORM\Column(type="integer")
     */
    private $montant;

    /**
     * @return mixed
     */
    public function getIdTarif()
    {
        return $this->id_tarif;
    }

    /**
     * @param mixed $id_tarif
     */
    public function setIdTarif($id_tarif)
    {
        $this->id_tarif = $id_tarif;
    }

    /**
     * @return mixed
     */
    public function getDesignation()
    {
        return $this->designation;
    }

    /**
     * @param mixed $designation
     */
    public function setDesignation($designation)
    {
        $this->designation = $designation;
    }

    /**
     * @return mixed
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * @param mixed $montant
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;
    }

}