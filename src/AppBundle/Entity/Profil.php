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
 * Class Profil
 * @package AppBundle\Entity
 */
class Profil
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $id_profil;
    /**
     * @ORM\Column(type="string")
     */
    private $nom;
    /**
     * @ORM\Column(type="string")
     */
    private $prenom;
    /**
     * @ORM\Column(type="datetime")
     */
    private $anniversaire;
    /**
     * @ORM\Column(type="string")
     */
    private $tel;
    /**
     * @ORM\Column(type="string")
     */
    private $email;
    /**
     * @ORM\Column(type="string")
     */
    private $pays;

    /**
     * @return mixed
     */
    public function getIdProfil()
    {
        return $this->id_profil;
    }

    /**
     * @param mixed $id_profil
     */
    public function setIdProfil($id_profil)
    {
        $this->id_profil = $id_profil;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getAnniversaire()
    {
        return $this->anniversaire;
    }

    /**
     * @param mixed $anniversaire
     */
    public function setAnniversaire($anniversaire)
    {
        $this->anniversaire = $anniversaire;
    }

    /**
     * @return mixed
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * @param mixed $tel
     */
    public function setTel($tel)
    {
        $this->tel = $tel;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * @param mixed $pays
     */
    public function setPays($pays)
    {
        $this->pays = $pays;
    }


}