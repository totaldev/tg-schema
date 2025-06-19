<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\Message\MessageSender;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Changes the verification status of a user or a chat by an owned bot.
 */
class SetMessageSenderBotVerification extends TdFunction
{
    public const TYPE_NAME = 'setMessageSenderBotVerification';

    public function __construct(
        /**
         * Identifier of the owned bot, which will verify the user or the chat.
         */
        protected int           $botUserId,
        /**
         * Identifier of the user or the supergroup or channel chat, which will be verified by the bot.
         */
        protected MessageSender $verifiedId,
        /**
         * Custom description of verification reason; 0-getOption("bot_verification_custom_description_length_max"). If empty, then "was verified by organization "organization_name"" will be used as description. Can be specified only if the bot is allowed to provide custom description.
         */
        protected string        $customDescription
    ) {}

    public static function fromArray(array $array): SetMessageSenderBotVerification
    {
        return new static(
            $array['bot_user_id'],
            TdSchemaRegistry::fromArray($array['verified_id']),
            $array['custom_description'],
        );
    }

    public function getBotUserId(): int
    {
        return $this->botUserId;
    }

    public function getCustomDescription(): string
    {
        return $this->customDescription;
    }

    public function getVerifiedId(): MessageSender
    {
        return $this->verifiedId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'              => static::TYPE_NAME,
            'bot_user_id'        => $this->botUserId,
            'verified_id'        => $this->verifiedId->typeSerialize(),
            'custom_description' => $this->customDescription,
        ];
    }
}
