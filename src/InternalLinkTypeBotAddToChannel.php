<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema;

/**
 * The link is a link to a Telegram bot, which is supposed to be added to a channel chat as an administrator. Call searchPublicChat with the given bot username and check that the user is a bot, ask the current user to select a channel chat to add the bot to as an administrator. Then, call getChatMember to receive the current bot rights in the chat and if the bot already is an administrator, check that the current user can edit its administrator rights and combine received rights with the requested administrator rights. Then, show confirmation box to the user, and call setChatMemberStatus with the chosen chat and confirmed rights
 */
class InternalLinkTypeBotAddToChannel extends InternalLinkType
{
    public const TYPE_NAME = 'internalLinkTypeBotAddToChannel';

    /**
     * Username of the bot
     *
     * @var string
     */
    protected string $botUsername;

    /**
     * Expected administrator rights for the bot
     *
     * @var ChatAdministratorRights
     */
    protected ChatAdministratorRights $administratorRights;

    public function __construct(string $botUsername, ChatAdministratorRights $administratorRights)
    {
        parent::__construct();

        $this->botUsername = $botUsername;
        $this->administratorRights = $administratorRights;
    }

    public static function fromArray(array $array): InternalLinkTypeBotAddToChannel
    {
        return new static(
            $array['bot_username'],
            TdSchemaRegistry::fromArray($array['administrator_rights']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'bot_username' => $this->botUsername,
            'administrator_rights' => $this->administratorRights->typeSerialize(),
        ];
    }

    public function getBotUsername(): string
    {
        return $this->botUsername;
    }

    public function getAdministratorRights(): ChatAdministratorRights
    {
        return $this->administratorRights;
    }
}
