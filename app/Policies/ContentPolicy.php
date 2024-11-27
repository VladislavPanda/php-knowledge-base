<?php

declare(strict_types=1);

namespace App\Policies;

class ContentPolicy extends BasePolicy
{
    /**
     * @return bool
     */
    public function edit(): bool
    {
        foreach ($this->roles as $roleDto) {
            if (!array_key_exists('content', $roleDto->getPermissions())) {
                return false;
            }

            if ($roleDto->getPermissions()['content'] === 'all' || $roleDto->getPermissions()['content'] === 'edit') {
                return true;
            }
        }

        return false;
    }
}
