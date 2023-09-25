<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Keyboard;

use Totaldev\TgSchema\Chat\ChatAdministratorRights;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A button that requests a chat to be shared by the current user; available only in private chats. Use the method shareChatWithBot to complete the request
 */
class KeyboardButtonTypeRequestChat extends KeyboardButtonType
{
    public const TYPE_NAME = 'keyboardButtonTypeRequestChat';

    /**
     * Expected bot administrator rights in the chat; may be null if they aren't restricted
     *
     * @var ChatAdministratorRights|null
     */
    protected ?ChatAdministratorRights $botAdministratorRights;

    /**
     * True, if the bot must be a member of the chat; for basic group and supergroup chats only
     *
     * @var bool
     */
    protected bool $botIsMember;

    /**
     * True, if the chat must have a username; otherwise, the chat must not have a username. Ignored if restrict_chat_has_username is false
     *
     * @var bool
     */
    protected bool $chatHasUsername;

    /**
     * True, if the chat must be a channel; otherwise, a basic group or a supergroup chat is shared
     *
     * @var bool
     */
    protected bool $chatIsChannel;

    /**
     * True, if the chat must be created by the current user
     *
     * @var bool
     */
    protected bool $chatIsCreated;

    /**
     * True, if the chat must be a forum supergroup; otherwise, the chat must not be a forum supergroup. Ignored if restrict_chat_is_forum is false
     *
     * @var bool
     */
    protected bool $chatIsForum;

    /**
     * Unique button identifier
     *
     * @var int
     */
    protected int $id;

    /**
     * True, if the chat must or must not have a username
     *
     * @var bool
     */
    protected bool $restrictChatHasUsername;

    /**
     * True, if the chat must or must not be a forum supergroup
     *
     * @var bool
     */
    protected bool $restrictChatIsForum;

    /**
     * Expected user administrator rights in the chat; may be null if they aren't restricted
     *
     * @var ChatAdministratorRights|null
     */
    protected ?ChatAdministratorRights $userAdministratorRights;

    public function __construct(
        int                      $id,
        bool                     $chatIsChannel,
        bool                     $restrictChatIsForum,
        bool                     $chatIsForum,
        bool                     $restrictChatHasUsername,
        bool                     $chatHasUsername,
        bool                     $chatIsCreated,
        ?ChatAdministratorRights $userAdministratorRights,
        ?ChatAdministratorRights $botAdministratorRights,
        bool                     $botIsMember,
    )
    {
        parent::__construct();

        $this->id = $id;
        $this->chatIsChannel = $chatIsChannel;
        $this->restrictChatIsForum = $restrictChatIsForum;
        $this->chatIsForum = $chatIsForum;
        $this->restrictChatHasUsername = $restrictChatHasUsername;
        $this->chatHasUsername = $chatHasUsername;
        $this->chatIsCreated = $chatIsCreated;
        $this->userAdministratorRights = $userAdministratorRights;
        $this->botAdministratorRights = $botAdministratorRights;
        $this->botIsMember = $botIsMember;
    }

    public static function fromArray(array $array): KeyboardButtonTypeRequestChat
    {
        return new static(
            $array['id'],
            $array['chat_is_channel'],
            $array['restrict_chat_is_forum'],
            $array['chat_is_forum'],
            $array['restrict_chat_has_username'],
            $array['chat_has_username'],
            $array['chat_is_created'],
            (isset($array['user_administrator_rights']) ? TdSchemaRegistry::fromArray($array['user_administrator_rights']) : null),
            (isset($array['bot_administrator_rights']) ? TdSchemaRegistry::fromArray($array['bot_administrator_rights']) : null),
            $array['bot_is_member'],
        );
    }

    public function getBotAdministratorRights(): ?ChatAdministratorRights
    {
        return $this->botAdministratorRights;
    }

    public function getBotIsMember(): bool
    {
        return $this->botIsMember;
    }

    public function getChatHasUsername(): bool
    {
        return $this->chatHasUsername;
    }

    public function getChatIsChannel(): bool
    {
        return $this->chatIsChannel;
    }

    public function getChatIsCreated(): bool
    {
        return $this->chatIsCreated;
    }

    public function getChatIsForum(): bool
    {
        return $this->chatIsForum;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getRestrictChatHasUsername(): bool
    {
        return $this->restrictChatHasUsername;
    }

    public function getRestrictChatIsForum(): bool
    {
        return $this->restrictChatIsForum;
    }

    public function getUserAdministratorRights(): ?ChatAdministratorRights
    {
        return $this->userAdministratorRights;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'id' => $this->id,
            'chat_is_channel' => $this->chatIsChannel,
            'restrict_chat_is_forum' => $this->restrictChatIsForum,
            'chat_is_forum' => $this->chatIsForum,
            'restrict_chat_has_username' => $this->restrictChatHasUsername,
            'chat_has_username' => $this->chatHasUsername,
            'chat_is_created' => $this->chatIsCreated,
            'user_administrator_rights' => (isset($this->userAdministratorRights) ? $this->userAdministratorRights : null),
            'bot_administrator_rights' => (isset($this->botAdministratorRights) ? $this->botAdministratorRights : null),
            'bot_is_member' => $this->botIsMember,
        ];
    }
}
