<?php

namespace OBN\AppBundle\Dbal\Types;

use Fresh\DoctrineEnumBundle\DBAL\Types\AbstractEnumType;

/**
 * Language
 */
class Language extends AbstractEnumType
{
    const EN = 'en';
    const ES = 'es';
    const FR = 'fr';

    protected static $choices = [
        self::EN => 'English',
        self::ES => 'Español',
        self::FR => 'Français'
    ];
}
