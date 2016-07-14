<?php

namespace OBN\AppBundle\Dbal\Types;

use Fresh\DoctrineEnumBundle\DBAL\Types\AbstractEnumType;

/**
 * MediaRotation
 */
class MediaRotation extends AbstractEnumType
{
    const DEG_0 = '0';
    const DEG_90 = '90';
    const DEG_180 = '180';
    const DEG_270 = '270';

    protected static $choices = [
        self::DEG_0 => '0',
        self::DEG_90 => '90',
        self::DEG_180 => '180',
        self::DEG_270 => '270'
    ];
}
