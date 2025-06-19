<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Remove;

use Totaldev\TgSchema\Message\MessageSender;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Removes the verification status of a user or a chat by an owned bot.
 */
class RemoveMessageSenderBotVerification extends TdFunction
{
    public const TYPE_NAME = 'removeMessageSenderBotVerification';

    public function __construct(
        /**
         * Identifier of the owned bot, which verified the user or the chat.
         */
        protected int           $botUserId,
        /**
         * Identifier of the user or the supergroup or channel chat, which verification is removed.
         */
        protected MessageSender $verifiedId
    ) {}

    public static function fromArray(array $array): RemoveMessageSenderBotVerification
    {
        return new static(
            $array['bot_user_id'],
            TdSchemaRegistry::fromArray($array['verified_id']),
        );
    }

    public function getBotUserId(): int
    {
        return $this->botUserId;
    }

    public function getVerifiedId(): MessageSender
    {
        return $this->verifiedId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'bot_user_id' => $this->botUserId,
            'verified_id' => $this->verifiedId->typeSerialize(),
        ];
    }
}
