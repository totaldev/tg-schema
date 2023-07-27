<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Internal;

/**
 * The link is a link to a Telegram bot, which is supposed to be added to a group chat. Call searchPublicChat with the given bot username, check that the user is a bot and can be added to groups, ask the current user to select a basic group or a supergroup chat to add the bot to, taking into account that bots can be added to a public supergroup only by administrators of the supergroup. If administrator rights are provided by the link, call getChatMember to receive the current bot rights in the chat and if the bot already is an administrator, check that the current user can edit its administrator rights, combine received rights with the requested administrator rights, show confirmation box to the user, and call setChatMemberStatus with the chosen chat and confirmed administrator rights. Before call to setChatMemberStatus it may be required to upgrade the chosen basic group chat to a supergroup chat. Then, if start_parameter isn't empty, call sendBotStartMessage with the given start parameter and the chosen chat; otherwise, just send /start message with bot's username added to the chat.
 */
class InternalLinkTypeBotStartInGroup extends InternalLinkType
{
    public const TYPE_NAME = 'internalLinkTypeBotStartInGroup';

    /**
     * Username of the bot
     *
     * @var string
     */
    protected string $botUsername;

    /**
     * The parameter to be passed to sendBotStartMessage
     *
     * @var string
     */
    protected string $startParameter;

    /**
     * Expected administrator rights for the bot; may be null
     *
     * @var ChatAdministratorRights|null
     */
    protected ?ChatAdministratorRights $administratorRights;

    public function __construct(
        string $botUsername,
        string $startParameter,
        ?ChatAdministratorRights $administratorRights,
    ) {
        parent::__construct();

        $this->botUsername = $botUsername;
        $this->startParameter = $startParameter;
        $this->administratorRights = $administratorRights;
    }

    public static function fromArray(array $array): InternalLinkTypeBotStartInGroup
    {
        return new static(
            $array['bot_username'],
            $array['start_parameter'],
            (isset($array['administrator_rights']) ? TdSchemaRegistry::fromArray($array['administrator_rights']) : null),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'bot_username' => $this->botUsername,
            'start_parameter' => $this->startParameter,
            'administrator_rights' => (isset($this->administratorRights) ? $this->administratorRights : null),
        ];
    }

    public function getBotUsername(): string
    {
        return $this->botUsername;
    }

    public function getStartParameter(): string
    {
        return $this->startParameter;
    }

    public function getAdministratorRights(): ?ChatAdministratorRights
    {
        return $this->administratorRights;
    }
}
