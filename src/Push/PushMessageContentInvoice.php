<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Push;

/**
 * A message with an invoice from a bot.
 */
class PushMessageContentInvoice extends PushMessageContent
{
    public const string TYPE_NAME = 'pushMessageContentInvoice';

    public function __construct(
        /**
         * True, if the message is a pinned message with the specified content.
         */
        protected bool   $isPinned,
        /**
         * Product price.
         */
        protected string $price,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PushMessageContentInvoice
    {
        return new static(
            isPinned: $array['is_pinned'],
            price   : $array['price'],
        );
    }

    public function getIsPinned(): bool
    {
        return $this->isPinned;
    }

    public function getPrice(): string
    {
        return $this->price;
    }

    public function setIsPinned(bool $value): static
    {
        $this->isPinned = $value;

        return $this;
    }

    public function setPrice(string $value): static
    {
        $this->price = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'is_pinned' => $this->isPinned,
            'price'     => $this->price,
        ];
    }
}
