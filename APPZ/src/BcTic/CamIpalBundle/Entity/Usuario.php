<?php

namespace BcTic\CamIpalBundle\Entity;

use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * Usuario
 *
 * @ORM\Table()
 * @ORM\Entity
 * @UniqueEntity("username")
 */
class Usuario implements UserInterface, \Serializable {
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=50, unique=true)
     * @Assert\NotBlank()
     * @Assert\Length(min = "3")
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     *
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="salt", type="string", length=255)
     */
    private $salt;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=100)
     * @Assert\NotBlank()
     * @Assert\Length(min = "5")
     */
    private $nombre;

    /**
     * @ORM\ManyToMany(targetEntity="Rol")
     * @ORM\JoinTable(name="rol_de_usuario",
     *     joinColumns={@ORM\JoinColumn(name="usuario_id", referencedColumnName="id")},
     *     inverseJoinColumns={@ORM\JoinColumn(name="rol_id", referencedColumnName="id")}
     * )
     */
    protected $roles;

    /**
     * @ORM\ManyToMany(targetEntity="Grupo")
     * @ORM\JoinTable(name="grupo_de_usuario",
     *     joinColumns={@ORM\JoinColumn(name="usuario_id", referencedColumnName="id")},
     *     inverseJoinColumns={@ORM\JoinColumn(name="grupo_id", referencedColumnName="id")}
     * )
     */
    protected $grupos;

     /**
     * @ORM\ManyToMany(targetEntity="Pais")
     * @ORM\JoinTable(name="pais_de_usuario",
     *     joinColumns={@ORM\JoinColumn(name="usuario_id", referencedColumnName="id")},
     *     inverseJoinColumns={@ORM\JoinColumn(name="pais_id", referencedColumnName="id")}
     * )
     */
    protected $pais;

    /**
     * @var boolean
     *
     * @ORM\Column(name="visible", type="boolean")
     */
    private $visible = true;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Usuario
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set salt
     *
     * @param string $salt
     * @return Usuario
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;

        return $this;
    }

    /**
     * Get salt
     *
     * @return string
     */
    public function getSalt()
    {
        return $this->salt;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->roles = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add roles
     *
     * @param \BcTic\CamIpalBundle\Entity\Rol $roles
     * @return Usuario
     */
    public function addRole(\BcTic\CamIpalBundle\Entity\Rol $roles)
    {
        $this->roles[] = $roles;

        return $this;
    }

    /**
     * Remove roles
     *
     * @param \BcTic\CamIpalBundle\Entity\Rol $roles
     */
    public function removeRole(\BcTic\CamIpalBundle\Entity\Rol $roles)
    {
        $this->roles->removeElement($roles);
    }

    /**
     * Get roles
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRoles()
    {
        return $this->roles->toArray();
    }

    /**
     * Set username
     *
     * @param string $username
     * @return Usuario
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }


    /**
     * @inheritDoc
     */
    public function eraseCredentials()
    {
    }

    /**
     * @see \Serializable::serialize()
     */
    public function serialize()
    {
        return serialize(array(
            $this->id,
            $this->username,
            $this->password,
            // see section on salt below
            // $this->salt,
        ));
    }

    /**
     * @see \Serializable::unserialize()
     */
    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->username,
            $this->password,
            // see section on salt below
            // $this->salt
        ) = unserialize($serialized);
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Usuario
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set pais
     *
     * @param \BcTic\CamIpalBundle\Entity\Pais $pais
     * @return Usuario
     */
    public function setPais(\Doctrine\Common\Collections\ArrayCollection $pais = null)
    {
        $this->pais = $pais;

        return $this;
    }

    /**
     * Get pais
     *
     * @return \BcTic\CamIpalBundle\Entity\Pais
     */
    public function getPais()
    {
        return $this->pais;
    }

    public function __toString() {
      return $this->nombre;
    }

    /**
     * Set visible
     *
     * @param boolean $visible
     * @return Usuario
     */
    public function setVisible($visible)
    {
        $this->visible = $visible;

        return $this;
    }

    /**
     * Get visible
     *
     * @return boolean
     */
    public function getVisible()
    {
        return $this->visible;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Usuario
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Add grupos
     *
     * @param \BcTic\CamIpalBundle\Entity\Grupo $grupos
     * @return Usuario
     */
    public function addGrupo(\BcTic\CamIpalBundle\Entity\Grupo $grupos)
    {
        $this->grupos[] = $grupos;

        return $this;
    }

    /**
     * Remove grupos
     *
     * @param \BcTic\CamIpalBundle\Entity\Grupo $grupos
     */
    public function removeGrupo(\BcTic\CamIpalBundle\Entity\Grupo $grupos)
    {
        $this->grupos->removeElement($grupos);
    }

    /**
     * Get grupos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getGrupos()
    {
        return $this->grupos;
    }

    /**
     * Add pais
     *
     * @param \BcTic\CamIpalBundle\Entity\Pais $pais
     * @return Usuario
     */
    public function addPai(\BcTic\CamIpalBundle\Entity\Pais $pais)
    {
        $this->pais[] = $pais;

        return $this;
    }

    /**
     * Remove pais
     *
     * @param \BcTic\CamIpalBundle\Entity\Pais $pais
     */
    public function removePai(\BcTic\CamIpalBundle\Entity\Pais $pais)
    {
        $this->pais->removeElement($pais);
    }
}
