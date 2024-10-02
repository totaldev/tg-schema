<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Add;

use Totaldev\TgSchema\TdFunction;

/**
 * Adds the paid message reaction to a message. Use getMessageAvailableReactions to check whether the reaction is available for the message.
 */
class AddPendingPaidMessageReaction extends TdFunction
{
    public const TYPE_NAME = 'addPendingPaidMessageReaction';

    public function __construct(
        /**
         * Identifier of the chat to which the message belongs.
         */
        protected int  $chatId,
        /**
         * Identifier of the message.
         */
        protected int  $messageId,
        /**
         * Number of Telegram Stars to be used for the reaction. The total number of pending paid reactions must not exceed getOption("paid_reaction_star_count_max").
         */
        protected int  $starCount,
        /**
         * Pass true if the user didn't choose anonymity explicitly, for example, the reaction is set from the message bubble.
         */
        protected bool $useDefaultIsAnonymous,
        /**
         * Pass true to make paid reaction of the user on the message anonymous; pass false to make the user's profile visible among top reactors. Ignored if use_default_is_anonymous == true.
         */
        protected bool $isAnonymous,
    ) {}

    public static function fromArray(array $array): AddPendingPaidMessageReaction
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
            $array['star_count'],
            $array['use_default_is_anonymous'],
            $array['is_anonymous'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getIsAnonymous(): bool
    {
        return $this->isAnonymous;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function getStarCount(): int
    {
        return $this->starCount;
    }

    public function getUseDefaultIsAnonymous(): bool
    {
        return $this->useDefaultIsAnonymous;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                    => static::TYPE_NAME,
            'chat_id'                  => $this->chatId,
            'message_id'               => $this->messageId,
            'star_count'               => $this->starCount,
            'use_default_is_anonymous' => $this->useDefaultIsAnonymous,
            'is_anonymous'             => $this->isAnonymous,
        ];
    }
}
