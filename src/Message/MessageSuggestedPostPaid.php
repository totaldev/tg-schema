<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\Star\StarAmount;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A suggested post was published for getOption("suggested_post_lifetime_min") seconds and payment for the post was received.
 */
class MessageSuggestedPostPaid extends MessageContent
{
    public const TYPE_NAME = 'messageSuggestedPostPaid';

    public function __construct(
        /**
         * Identifier of the message with the suggested post; can be 0 if the message was deleted.
         */
        protected int        $suggestedPostMessageId,
        /**
         * The amount of received Telegram Stars.
         */
        protected StarAmount $starAmount,
        /**
         * The amount of received Toncoins; in the smallest units of the cryptocurrency.
         */
        protected int        $tonAmount,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageSuggestedPostPaid
    {
        return new static(
            $array['suggested_post_message_id'],
            TdSchemaRegistry::fromArray($array['star_amount']),
            $array['ton_amount'],
        );
    }

    public function getStarAmount(): StarAmount
    {
        return $this->starAmount;
    }

    public function getSuggestedPostMessageId(): int
    {
        return $this->suggestedPostMessageId;
    }

    public function getTonAmount(): int
    {
        return $this->tonAmount;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                     => static::TYPE_NAME,
            'suggested_post_message_id' => $this->suggestedPostMessageId,
            'star_amount'               => $this->starAmount->typeSerialize(),
            'ton_amount'                => $this->tonAmount,
        ];
    }
}
