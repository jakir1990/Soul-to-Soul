<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserRoles
 *
 * @ORM\Table(name="user_roles")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserRolesRepository")
 */
class UserRoles
{
    /**
     * @var string
     *
     * @ORM\Column(name="user_role_name", type="string", length=16, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $userRoleName;

    /**
     * @var string
     *
     * @ORM\Column(name="user_role", type="string", length=45, nullable=false)
     */
    private $userRole;

    /**
     * Set userRoleName
     *
     * @param string $userRoleName
     *
     * @return UserRoles
     */
    public function setUserRoleName($userRoleName)
    {
        $this->userRoleName = $userRoleName;
        return $this;
    }

    /**
     * Get userRoleName
     *
     * @return string
     */
    public function getUserRoleName()
    {
        return $this->userRoleName;
    }

    /**
     * Set userRole
     *
     * @param string $userRole
     *
     * @return UserRoles
     */
    public function setUserRole($userRole)
    {
        $this->userRole = $userRole;

        return $this;
    }

    /**
     * Get userRole
     *
     * @return string
     */
    public function getUserRole()
    {
        return $this->userRole;
    }
}
