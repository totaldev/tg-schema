<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns the list of features available for different chat boost levels; this is an offline request.
 */
class GetChatBoostFeatures extends TdFunction
{
    public const TYPE_NAME = 'getChatBoostFeatures';

    public function __construct(
        /**
         * Pass true to get the list of features for channels; pass false to get the list of features for supergroups.
         */
        protected bool $isChannel
    ) {}

    public static function fromArray(array $array): GetChatBoostFeatures
    {
        return new static(
            $array['is_channel'],
        );
    }

    public function getIsChannel(): bool
    {
        return $this->isChannel;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'is_channel' => $this->isChannel,
        ];
    }
}
