<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Business;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes a bot connected to a business account.
 */
class BusinessConnectedBot extends TdObject
{
    public const TYPE_NAME = 'businessConnectedBot';

    public function __construct(
        /**
         * User identifier of the bot.
         */
        protected int                $botUserId,
        /**
         * Private chats that will be accessible to the bot.
         */
        protected BusinessRecipients $recipients,
        /**
         * Rights of the bot.
         */
        protected BusinessBotRights  $rights
    ) {}

    public static function fromArray(array $array): BusinessConnectedBot
    {
        return new static(
            $array['bot_user_id'],
            TdSchemaRegistry::fromArray($array['recipients']),
            TdSchemaRegistry::fromArray($array['rights']),
        );
    }

    public function getBotUserId(): int
    {
        return $this->botUserId;
    }

    public function getRecipients(): BusinessRecipients
    {
        return $this->recipients;
    }

    public function getRights(): BusinessBotRights
    {
        return $this->rights;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'bot_user_id' => $this->botUserId,
            'recipients'  => $this->recipients->typeSerialize(),
            'rights'      => $this->rights->typeSerialize(),
        ];
    }
}
