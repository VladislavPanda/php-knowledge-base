<?php

declare(strict_types=1);

namespace App\Dto;

readonly final class RoleDto
{
    /**
     * @param int $id
     * @param string $name
     * @param array $permissions
     */
    public function __construct(
        public int $id,
        public string $name,
        public array $permissions,
    ) {
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return array
     */
    public function getPermissions(): array
    {
        return $this->permissions;
    }
}
