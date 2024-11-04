<?php

declare(strict_types=1);

namespace App\Enums;

enum UserRole: int
{
    case Participant = 1;
    case Redactor = 2;
    case Admin = 3;
}
