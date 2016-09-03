<?php
/**
 * Created by PhpStorm.
 * User: zoe
 * Date: 03/09/16
 * Time: 11:52
 */

namespace AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="billet")
 */
class Billet
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $id_billet;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Reservation")
     * @ORM\JoinColumn(name="reservation", referencedColumnName="id_reservation")
     */
    private $reservation;

    /**
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Tarif")
     * @ORM\JoinColumn(name="tarif", referencedColumnName="id_tarif")
     */
    private $tarif;

    /**
     * @return mixed
     */
    public function getIdBillet()
    {
        return $this->id_billet;
    }

    /**
     * @param mixed $id_billet
     */
    public function setIdBillet($id_billet)
    {
        $this->id_billet = $id_billet;
    }

    /**
     * @return mixed $reservation
     */
    public function getReservation(Reservation $reservation)
    {
        return $this->$reservation;
    }

    /**
     * @param mixed $reservation
     */
    public function setReservation(Reservation $reservation)
    {
        $this->reservation = $reservation;
    }

    /**
     * @return mixed $tarif
     */
    public function getTarif(Tarif $tarif)
    {
        return $this->$tarif;
    }

    /**
     * @param mixed $tarif
     */
    public function setTarif(Tarif $tarif)
    {
        $this->tarif = $tarif;
    }

}