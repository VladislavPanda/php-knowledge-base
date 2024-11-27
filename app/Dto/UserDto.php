<?php

declare(strict_types=1);

namespace App\Dto;

readonly final class UserDto
{
    /**
     * @param int $id
     * @param string $name
     * @param string $email
     * @param string|null $avatarUrl
     * @param string|null $socialId
     * @param string|null $socialType
     * @param string|null $password
     * @param RoleDto[]|null $roles
     */
    public function __construct(
        private int $id,
        private string $name,
        private string $email,
        private ?string $avatarUrl,
        private ?string $socialId = null,
        private ?string $socialType = 'google',
        private ?string $password = null,
        private ?array $roles = null
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
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string|null
     */
    public function getAvatarUrl(): ?string
    {
        return $this->avatarUrl;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @return string
     */
    public function getSocialId(): string
    {
        return $this->socialId;
    }

    /**
     * @return string
     */
    public function getSocialType(): string
    {
        return $this->socialType;
    }

    /**
     * @return RoleDto[]|null
     */
    public function getRoles(): ?array
    {
        return $this->roles;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            'name' => $this->name,
            'email' => $this->email,
            'avatar_url' => $this->avatarUrl,
            'social_id' => $this->socialId,
            'social_type' => $this->socialType,
            'password' => $this->password,
        ];
    }
}
