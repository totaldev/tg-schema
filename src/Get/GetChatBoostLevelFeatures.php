<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns the list of features available on the specific chat boost level; this is an offline request.
 */
class GetChatBoostLevelFeatures extends TdFunction
{
    public const TYPE_NAME = 'getChatBoostLevelFeatures';

    public function __construct(
        /**
         * Pass true to get the list of features for channels; pass false to get the list of features for supergroups.
         */
        protected bool $isChannel,
        /**
         * Chat boost level.
         */
        protected int  $level,
    ) {}

    public static function fromArray(array $array): GetChatBoostLevelFeatures
    {
        return new static(
            $array['is_channel'],
            $array['level'],
        );
    }

    public function getIsChannel(): bool
    {
        return $this->isChannel;
    }

    public function getLevel(): int
    {
        return $this->level;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'is_channel' => $this->isChannel,
            'level'      => $this->level,
        ];
    }
}
