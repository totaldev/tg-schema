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
    public const string TYPE_NAME = 'pushMessageContentUpgradedGift';

    public function __construct(
        /**
         * True, if the gift was obtained by upgrading of a previously received gift; otherwise, if is_prepaid_upgrade == false, then this is a transferred or resold gift.
         */
        protected bool $isUpgrade,
        /**
         * True, if the message is about completion of prepaid upgrade of the gift instead of actual receiving of a new gift.
         */
        protected bool $isPrepaidUpgrade,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PushMessageContentUpgradedGift
    {
        return new static(
            $array['is_upgrade'],
            $array['is_prepaid_upgrade'],
        );
    }

    public function getIsPrepaidUpgrade(): bool
    {
        return $this->isPrepaidUpgrade;
    }

    public function getIsUpgrade(): bool
    {
        return $this->isUpgrade;
    }

    public function setIsPrepaidUpgrade(bool $value): static
    {
        $this->isPrepaidUpgrade = $value;

        return $this;
    }

    public function setIsUpgrade(bool $value): static
    {
        $this->isUpgrade = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'              => static::TYPE_NAME,
            'is_upgrade'         => $this->isUpgrade,
            'is_prepaid_upgrade' => $this->isPrepaidUpgrade,
        ];
    }
}
