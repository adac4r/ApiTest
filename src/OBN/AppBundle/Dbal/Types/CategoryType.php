<?php

namespace OBN\AppBundle\Dbal\Types;

use Fresh\DoctrineEnumBundle\DBAL\Types\AbstractEnumType;

/**
 * CategoryType
 */
class CategoryType extends AbstractEnumType
{
    const SUPER = 1;
    const SOCIAL = 2;
    const NEWS = 3;

    /**
     * @var array
     */
    protected static $choices = [
        self::SUPER => 'super',
        self::SOCIAL => 'social',
        self::NEWS => 'news'
    ];

    /**
     * @param $choice
     * @return mixed
     */
    public static function getValue($choice)
    {
        return array_search($choice, self::$choices, true);
    }
}
