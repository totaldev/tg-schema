<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Toggle;

use Totaldev\TgSchema\TdFunction;

/**
 * Toggles whether a gift is shown on the current user's or the channel's profile page; requires can_post_messages administrator right in the channel chat.
 */
class ToggleGiftIsSaved extends TdFunction
{
    public const string TYPE_NAME = 'toggleGiftIsSaved';

    public function __construct(
        /**
         * Pass true to display the gift on the user's or the channel's profile page; pass false to remove it from the profile page.
         */
        protected bool   $isSaved,
        /**
         * Identifier of the gift.
         */
        protected string $receivedGiftId,
    ) {}

    public static function fromArray(array $array): ToggleGiftIsSaved
    {
        return new static(
            isSaved       : $array['is_saved'],
            receivedGiftId: $array['received_gift_id'],
        );
    }

    public function getIsSaved(): bool
    {
        return $this->isSaved;
    }

    public function getReceivedGiftId(): string
    {
        return $this->receivedGiftId;
    }

    public function setIsSaved(bool $value): static
    {
        $this->isSaved = $value;

        return $this;
    }

    public function setReceivedGiftId(string $value): static
    {
        $this->receivedGiftId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'is_saved'         => $this->isSaved,
            'received_gift_id' => $this->receivedGiftId,
        ];
    }
}
