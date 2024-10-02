<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\Input\InputBusinessStartPage;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Changes the business start page of the current user. Requires Telegram Business subscription.
 */
class SetBusinessStartPage extends TdFunction
{
    public const TYPE_NAME = 'setBusinessStartPage';

    public function __construct(
        /**
         * The new start page of the business; pass null to remove custom start page.
         */
        protected InputBusinessStartPage $startPage
    ) {}

    public static function fromArray(array $array): SetBusinessStartPage
    {
        return new static(
            TdSchemaRegistry::fromArray($array['start_page']),
        );
    }

    public function getStartPage(): InputBusinessStartPage
    {
        return $this->startPage;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'start_page' => $this->startPage->typeSerialize(),
        ];
    }
}
