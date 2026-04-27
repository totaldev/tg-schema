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
    public const string TYPE_NAME = 'setMessageSenderBotVerification';

    public function __construct(
        /**
         * Identifier of the owned bot, which will verify the user or the chat.
         */
        protected int           $botUserId,
        /**
         * Custom description of verification reason; 0-getOption("bot_verification_custom_description_length_max"). If empty, then "was verified by organization "organization_name"" will be used as description. Can be specified only if the bot is allowed to provide custom description.
         */
        protected string        $customDescription,
        /**
         * Identifier of the user or the supergroup or channel chat, which will be verified by the bot.
         */
        protected MessageSender $verifiedId,
    ) {}

    public static function fromArray(array $array): SetMessageSenderBotVerification
    {
        return new static(
            botUserId        : $array['bot_user_id'],
            customDescription: $array['custom_description'],
            verifiedId       : TdSchemaRegistry::fromArray($array['verified_id']),
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

    public function setBotUserId(int $value): static
    {
        $this->botUserId = $value;

        return $this;
    }

    public function setCustomDescription(string $value): static
    {
        $this->customDescription = $value;

        return $this;
    }

    public function setVerifiedId(MessageSender $value): static
    {
        $this->verifiedId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'              => static::TYPE_NAME,
            'bot_user_id'        => $this->botUserId,
            'custom_description' => $this->customDescription,
            'verified_id'        => $this->verifiedId->jsonSerialize(),
        ];
    }
}
