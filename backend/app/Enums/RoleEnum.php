<?php

namespace App\Enums;

class RoleEnum
{
    const SUPER_ADMIN = 'super_admin';
    const ADMIN = 'admin';

    public static function getAttribute($attribute): ?array
    {
        $values = [
            'SUPER_ADMIN' => self::SUPER_ADMIN,
            'ADMIN' => self::ADMIN,
        ];

        return $values[$attribute] ?? null;
    }

    public static function values(): array
    {
        return [
            self::SUPER_ADMIN => 'super_admin',
            self::ADMIN => 'admin',
        ];
    }
}
