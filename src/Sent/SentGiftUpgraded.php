<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Sent;

use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Upgraded\UpgradedGift;

/**
 * Upgraded gift.
 */
class SentGiftUpgraded extends SentGift
{
    public const TYPE_NAME = 'sentGiftUpgraded';

    public function __construct(
        /**
         * The gift.
         */
        protected UpgradedGift $gift
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): SentGiftUpgraded
    {
        return new static(
            TdSchemaRegistry::fromArray($array['gift']),
        );
    }

    public function getGift(): UpgradedGift
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
