<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Clear;

use Totaldev\TgSchema\TdFunction;

/**
 * Clears the list of recently searched for hashtags or cashtags.
 */
class ClearSearchedForTags extends TdFunction
{
    public const string TYPE_NAME = 'clearSearchedForTags';

    public function __construct(
        /**
         * Pass true to clear the list of recently searched for cashtags; otherwise, the list of recently searched for hashtags will be cleared.
         */
        protected bool $clearCashtags
    ) {}

    public static function fromArray(array $array): ClearSearchedForTags
    {
        return new static(
            clearCashtags: $array['clear_cashtags'],
        );
    }

    public function getClearCashtags(): bool
    {
        return $this->clearCashtags;
    }

    public function setClearCashtags(bool $value): static
    {
        $this->clearCashtags = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'clear_cashtags' => $this->clearCashtags,
        ];
    }
}
