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
    public const string TYPE_NAME = 'setBusinessStartPage';

    public function __construct(
        /**
         * The new start page of the business; pass null to remove custom start page.
         */
        protected ?InputBusinessStartPage $startPage = null
    ) {}

    public static function fromArray(array $array): SetBusinessStartPage
    {
        return new static(
            isset($array['start_page']) ? TdSchemaRegistry::fromArray($array['start_page']) : null,
        );
    }

    public function getStartPage(): ?InputBusinessStartPage
    {
        return $this->startPage;
    }

    public function setStartPage(?InputBusinessStartPage $value): static
    {
        $this->startPage = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'start_page' => $this->startPage ?? null,
        ];
    }
}
