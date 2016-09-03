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
 * Class Reservation
 * @package AppBundle\Entity
 */
class Reservation
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $id_reservation;

    /**
     * @ORM\Column(type="integer")
     */
    private $code;

    /**
     * @ORM\Column(type="datetime")
     */
    private $datetime;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Profil")
     * @ORM\JoinColumn(name="profil", referencedColumnName="id_profil")
     */
    private $profil;

    /**
     * @return mixed
     */
    public function getIdReservation()
    {
        return $this->id_reservation;
    }

    /**
     * @param mixed $id_reservation
     */
    public function setIdReservation($id_reservation)
    {
        $this->id_reservation = $id_reservation;
    }

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param mixed $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return mixed
     */
    public function getDatetime()
    {
        return $this->datetime;
    }

    /**
     * @param mixed $datetime
     */
    public function setDatetime($datetime)
    {
        $this->datetime = $datetime;
    }

    /**
     * @return mixed $profil
     */
    public function getProfil()
    {
        return $this->profil;
    }

    /**
     * @param mixed $profil
     */
    public function setProfil(Profil $profil)
    {
        $this->profil = $profil;
    }

}