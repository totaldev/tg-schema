<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns available to the current user gift chat themes.
 */
class GetGiftChatThemes extends TdFunction
{
    public const string TYPE_NAME = 'getGiftChatThemes';

    public function __construct(
        /**
         * Offset of the first entry to return as received from the previous request; use empty string to get the first chunk of results.
         */
        protected string $offset,
        /**
         * The maximum number of chat themes to return.
         */
        protected int    $limit,
    ) {}

    public static function fromArray(array $array): GetGiftChatThemes
    {
        return new static(
            $array['offset'],
            $array['limit'],
        );
    }

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function getOffset(): string
    {
        return $this->offset;
    }

    public function setLimit(int $value): static
    {
        $this->limit = $value;

        return $this;
    }

    public function setOffset(string $value): static
    {
        $this->offset = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'  => static::TYPE_NAME,
            'offset' => $this->offset,
            'limit'  => $this->limit,
        ];
    }
}
