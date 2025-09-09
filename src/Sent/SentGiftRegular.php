<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Sent;

use Totaldev\TgSchema\Gift\Gift;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Regular gift.
 */
class SentGiftRegular extends SentGift
{
    public const TYPE_NAME = 'sentGiftRegular';

    public function __construct(
        /**
         * The gift.
         */
        protected Gift $gift
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): SentGiftRegular
    {
        return new static(
            TdSchemaRegistry::fromArray($array['gift']),
        );
    }

    public function getGift(): Gift
    {
        return $this->gift;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'gift'  => $this->gift->typeSerialize(),
        ];
    }
}
