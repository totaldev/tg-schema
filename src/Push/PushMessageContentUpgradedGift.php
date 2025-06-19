<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Push;

/**
 * A message with an upgraded gift.
 */
class PushMessageContentUpgradedGift extends PushMessageContent
{
    public const TYPE_NAME = 'pushMessageContentUpgradedGift';

    public function __construct(
        /**
         * True, if the gift was obtained by upgrading of a previously received gift; otherwise, this is a transferred or resold gift.
         */
        protected bool $isUpgrade
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PushMessageContentUpgradedGift
    {
        return new static(
            $array['is_upgrade'],
        );
    }

    public function getIsUpgrade(): bool
    {
        return $this->isUpgrade;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'is_upgrade' => $this->isUpgrade,
        ];
    }
}
