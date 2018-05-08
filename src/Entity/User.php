<?php

namespace App\Entity;

use Symfony\Component\Security\Core\User\UserInterface;
use GraphAware\Neo4j\OGM\Annotations as OGM;

/**
 * Class User
 * @package App\Entity
 *
 * @OGM\Node(label="User")
 */
class User implements UserInterface
{
    /**
     * @var int
     *
     * @OGM\GraphId()
     */
    private $id;

    /**
     * @var string
     *
     * @OGM\Property(type="string")
     */
    private $username;

    /**
     * @var string
     *
     * @OGM\Property(type="string")
     */
    private $password;

    public function getUsername()
    {
        return $this->username;
    }

    public function getRoles()
    {
        return ['ROLE_USER'];
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getSalt()
    {
        // TODO: Implement getSalt() method.
    }

    public function eraseCredentials()
    {
        // TODO: Implement eraseCredentials() method.
    }

}