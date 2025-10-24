<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Suggested;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains information about a suggested post. If the post can be approved or declined, then changes to the post can be also suggested. Use sendMessage with
 * reply to the message and suggested post information to suggest message changes. Use addOffer to suggest price or time changes.
 */
class SuggestedPostInfo extends TdObject
{
    public const string TYPE_NAME = 'suggestedPostInfo';

    public function __construct(
        /**
         * Price of the suggested post; may be null if the post is non-paid.
         */
        protected ?SuggestedPostPrice $price,
        /**
         * Point in time (Unix timestamp) when the post is expected to be published; 0 if the specific date isn't set yet.
         */
        protected int                 $sendDate,
        /**
         * State of the post.
         */
        protected SuggestedPostState  $state,
        /**
         * True, if the suggested post can be approved by the current user using approveSuggestedPost; updates aren't sent when value of this field changes.
         */
        protected bool                $canBeApproved,
        /**
         * True, if the suggested post can be declined by the current user using declineSuggestedPost; updates aren't sent when value of this field changes.
         */
        protected bool                $canBeDeclined,
    ) {}

    public static function fromArray(array $array): SuggestedPostInfo
    {
        return new static(
            isset($array['price']) ? TdSchemaRegistry::fromArray($array['price']) : null,
            $array['send_date'],
            TdSchemaRegistry::fromArray($array['state']),
            $array['can_be_approved'],
            $array['can_be_declined'],
        );
    }

    public function getCanBeApproved(): bool
    {
        return $this->canBeApproved;
    }

    public function getCanBeDeclined(): bool
    {
        return $this->canBeDeclined;
    }

    public function getPrice(): ?SuggestedPostPrice
    {
        return $this->price;
    }

    public function getSendDate(): int
    {
        return $this->sendDate;
    }

    public function getState(): SuggestedPostState
    {
        return $this->state;
    }

    public function setCanBeApproved(bool $value): static
    {
        $this->canBeApproved = $value;

        return $this;
    }

    public function setCanBeDeclined(bool $value): static
    {
        $this->canBeDeclined = $value;

        return $this;
    }

    public function setPrice(?SuggestedPostPrice $value): static
    {
        $this->price = $value;

        return $this;
    }

    public function setSendDate(int $value): static
    {
        $this->sendDate = $value;

        return $this;
    }

    public function setState(SuggestedPostState $value): static
    {
        $this->state = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'price'           => $this->price ?? null,
            'send_date'       => $this->sendDate,
            'state'           => $this->state->typeSerialize(),
            'can_be_approved' => $this->canBeApproved,
            'can_be_declined' => $this->canBeDeclined,
        ];
    }
}
