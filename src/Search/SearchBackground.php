<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Search;

use Totaldev\TgSchema\TdFunction;

/**
 * Searches for a background by its name.
 */
class SearchBackground extends TdFunction
{
    public const TYPE_NAME = 'searchBackground';

    public function __construct(
        /**
         * The name of the background.
         */
        protected string $name
    ) {}

    public static function fromArray(array $array): SearchBackground
    {
        return new static(
            $array['name'],
        );
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'name'  => $this->name,
        ];
    }
}
