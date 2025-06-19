<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Gift;

use Totaldev\TgSchema\Accepted\AcceptedGiftTypes;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains settings for gift receiving for a user.
 */
class GiftSettings extends TdObject
{
    public const TYPE_NAME = 'giftSettings';

    public function __construct(
        /**
         * True, if a button for sending a gift to the user or by the user must always be shown in the input field.
         */
        protected bool              $showGiftButton,
        /**
         * Types of gifts accepted by the user; for Telegram Premium users only.
         */
        protected AcceptedGiftTypes $acceptedGiftTypes
    ) {}

    public static function fromArray(array $array): GiftSettings
    {
        return new static(
            $array['show_gift_button'],
            TdSchemaRegistry::fromArray($array['accepted_gift_types']),
        );
    }

    public function getAcceptedGiftTypes(): AcceptedGiftTypes
    {
        return $this->acceptedGiftTypes;
    }

    public function getShowGiftButton(): bool
    {
        return $this->showGiftButton;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'               => static::TYPE_NAME,
            'show_gift_button'    => $this->showGiftButton,
            'accepted_gift_types' => $this->acceptedGiftTypes->typeSerialize(),
        ];
    }
}
