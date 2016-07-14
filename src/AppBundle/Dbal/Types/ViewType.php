<?php

namespace OBN\AppBundle\Dbal\Types;

use Fresh\DoctrineEnumBundle\DBAL\Types\AbstractEnumType;

/**
 * ViewType
 */
class ViewType extends AbstractEnumType
{
    const VIEW = 1;

    /**
     * @var array
     */
    protected static $choices = [
        self::VIEW => 'view'
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
