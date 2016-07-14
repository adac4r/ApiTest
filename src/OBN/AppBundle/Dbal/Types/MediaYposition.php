<?php

namespace OBN\AppBundle\Dbal\Types;

use Fresh\DoctrineEnumBundle\DBAL\Types\AbstractEnumType;

/**
 * MediaYposition
 */
class MediaYposition extends AbstractEnumType
{
    const TOP = 'top';
    const CENTER = 'center';
    const BOTTOM = 'bottom';

    protected static $choices = [
        self::TOP => 'Top',
        self::CENTER => 'Center',
        self::BOTTOM => 'Bottom'
    ];
}
