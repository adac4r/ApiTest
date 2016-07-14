<?php

namespace OBN\AppBundle\Dbal\Types;

use Fresh\DoctrineEnumBundle\DBAL\Types\AbstractEnumType;

/**
 * MediaXposition
 */
class MediaXposition extends AbstractEnumType
{
    const LEFT = 'left';
    const CENTER = 'center';
    const RIGHT = 'right';

    protected static $choices = [
        self::LEFT => 'Left',
        self::CENTER => 'Center',
        self::RIGHT => 'Right'
    ];

}
