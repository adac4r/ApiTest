<?php

namespace OBN\AppBundle\Dbal\Types;

use Fresh\DoctrineEnumBundle\DBAL\Types\AbstractEnumType;

/**
 * MediaType
 */
class MediaType extends AbstractEnumType
{
    const IMAGE = 'image';
    const VIDEO = 'video';
    const AUDIO = 'audio';

    protected static $choices = [
        self::AUDIO => 'Audio',
        self::IMAGE => 'Image',
        self::VIDEO => 'Video'
    ];
}
