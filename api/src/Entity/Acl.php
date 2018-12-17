<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ApiResource
 * @ORM\Entity
 */
class Acl
{
    public const VIEW          = 'VIEW';
    public const EDIT          = 'EDIT';
    public const UPDATE        = 'UPDATE';
    public const DEFAULT_OWNER = 'USER';

    /**
     * @var int The entity Id
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string A resource (service1:/homepage)
     *
     * @ORM\Column
     * @Assert\NotBlank
     */
    public $resource = '';

    /**
     * @var string A User Or Group
     *
     * @ORM\Column
     * @Assert\NotBlank
     */
    public $owner = self::DEFAULT_OWNER;

    /**
     * @var string A permission
     *
     * @ORM\Column
     * @Assert\NotBlank
     */
    public $permissions = self::VIEW;

    public function getId(): int
    {
        return $this->id;
    }
}
