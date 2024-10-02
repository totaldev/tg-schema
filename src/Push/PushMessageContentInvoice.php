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
    public const TYPE_NAME = 'pushMessageContentInvoice';

    public function __construct(
        /**
         * Product price.
         */
        protected string $price,
        /**
         * True, if the message is a pinned message with the specified content.
         */
        protected bool   $isPinned,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PushMessageContentInvoice
    {
        return new static(
            $array['price'],
            $array['is_pinned'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'price'     => $this->price,
            'is_pinned' => $this->isPinned,
        ];
    }
}
