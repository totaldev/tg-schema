<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Internal;

use Totaldev\TgSchema\Chat\ChatAdministratorRights;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The link is a link to a Telegram bot, which is expected to be added to a channel chat as an administrator. Call searchPublicChat with the given bot username
 * and check that the user is a bot, ask the current user to select a channel chat to add the bot to as an administrator. Then, call getChatMember to receive
 * the current bot rights in the chat and if the bot already is an administrator, check that the current user can edit its administrator rights and combine
 * received rights with the requested administrator rights. Then, show confirmation box to the user, and call setChatMemberStatus with the chosen chat and
 * confirmed rights.
 */
class InternalLinkTypeBotAddToChannel extends InternalLinkType
{
    public const string TYPE_NAME = 'internalLinkTypeBotAddToChannel';

    public function __construct(
        /**
         * Expected administrator rights for the bot.
         */
        protected ChatAdministratorRights $administratorRights,
        /**
         * Username of the bot.
         */
        protected string                  $botUsername,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InternalLinkTypeBotAddToChannel
    {
        return new static(
            administratorRights: TdSchemaRegistry::fromArray($array['administrator_rights']),
            botUsername        : $array['bot_username'],
        );
    }

    public function getAdministratorRights(): ChatAdministratorRights
    {
        return $this->administratorRights;
    }

    public function getBotUsername(): string
    {
        return $this->botUsername;
    }

    public function setAdministratorRights(ChatAdministratorRights $value): static
    {
        $this->administratorRights = $value;

        return $this;
    }

    public function setBotUsername(string $value): static
    {
        $this->botUsername = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'administrator_rights' => $this->administratorRights->jsonSerialize(),
            'bot_username'         => $this->botUsername,
        ];
    }
}
