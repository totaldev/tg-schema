<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Keyboard;

use Totaldev\TgSchema\Chat\ChatAdministratorRights;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A button that requests a chat to be shared by the current user; available only in private chats. Use the method shareChatWithBot to complete the request.
 */
class KeyboardButtonTypeRequestChat extends KeyboardButtonType
{
    public const string TYPE_NAME = 'keyboardButtonTypeRequestChat';

    public function __construct(
        /**
         * Expected bot administrator rights in the chat; may be null if they aren't restricted.
         */
        protected ?ChatAdministratorRights $botAdministratorRights,
        /**
         * True, if the bot must be a member of the chat; for basic group and supergroup chats only.
         */
        protected bool                     $botIsMember,
        /**
         * True, if the chat must have a username; otherwise, the chat must not have a username. Ignored if restrict_chat_has_username is false.
         */
        protected bool                     $chatHasUsername,
        /**
         * True, if the chat must be a channel; otherwise, a basic group or a supergroup chat is shared.
         */
        protected bool                     $chatIsChannel,
        /**
         * True, if the chat must be created by the current user.
         */
        protected bool                     $chatIsCreated,
        /**
         * True, if the chat must be a forum supergroup; otherwise, the chat must not be a forum supergroup. Ignored if restrict_chat_is_forum is false.
         */
        protected bool                     $chatIsForum,
        /**
         * Unique button identifier.
         */
        protected int                      $id,
        /**
         * Pass true to request photo of the chat; bots only.
         */
        protected bool                     $requestPhoto,
        /**
         * Pass true to request title of the chat; bots only.
         */
        protected bool                     $requestTitle,
        /**
         * Pass true to request username of the chat; bots only.
         */
        protected bool                     $requestUsername,
        /**
         * True, if the chat must or must not have a username.
         */
        protected bool                     $restrictChatHasUsername,
        /**
         * True, if the chat must or must not be a forum supergroup.
         */
        protected bool                     $restrictChatIsForum,
        /**
         * Expected user administrator rights in the chat; may be null if they aren't restricted.
         */
        protected ?ChatAdministratorRights $userAdministratorRights,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): KeyboardButtonTypeRequestChat
    {
        return new static(
            botAdministratorRights : (isset($array['bot_administrator_rights']) ? TdSchemaRegistry::fromArray($array['bot_administrator_rights']) : null),
            botIsMember            : $array['bot_is_member'],
            chatHasUsername        : $array['chat_has_username'],
            chatIsChannel          : $array['chat_is_channel'],
            chatIsCreated          : $array['chat_is_created'],
            chatIsForum            : $array['chat_is_forum'],
            id                     : $array['id'],
            requestPhoto           : $array['request_photo'],
            requestTitle           : $array['request_title'],
            requestUsername        : $array['request_username'],
            restrictChatHasUsername: $array['restrict_chat_has_username'],
            restrictChatIsForum    : $array['restrict_chat_is_forum'],
            userAdministratorRights: (isset($array['user_administrator_rights']) ? TdSchemaRegistry::fromArray($array['user_administrator_rights']) : null),
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

    public function getRequestPhoto(): bool
    {
        return $this->requestPhoto;
    }

    public function getRequestTitle(): bool
    {
        return $this->requestTitle;
    }

    public function getRequestUsername(): bool
    {
        return $this->requestUsername;
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

    public function setBotAdministratorRights(?ChatAdministratorRights $value): static
    {
        $this->botAdministratorRights = $value;

        return $this;
    }

    public function setBotIsMember(bool $value): static
    {
        $this->botIsMember = $value;

        return $this;
    }

    public function setChatHasUsername(bool $value): static
    {
        $this->chatHasUsername = $value;

        return $this;
    }

    public function setChatIsChannel(bool $value): static
    {
        $this->chatIsChannel = $value;

        return $this;
    }

    public function setChatIsCreated(bool $value): static
    {
        $this->chatIsCreated = $value;

        return $this;
    }

    public function setChatIsForum(bool $value): static
    {
        $this->chatIsForum = $value;

        return $this;
    }

    public function setId(int $value): static
    {
        $this->id = $value;

        return $this;
    }

    public function setRequestPhoto(bool $value): static
    {
        $this->requestPhoto = $value;

        return $this;
    }

    public function setRequestTitle(bool $value): static
    {
        $this->requestTitle = $value;

        return $this;
    }

    public function setRequestUsername(bool $value): static
    {
        $this->requestUsername = $value;

        return $this;
    }

    public function setRestrictChatHasUsername(bool $value): static
    {
        $this->restrictChatHasUsername = $value;

        return $this;
    }

    public function setRestrictChatIsForum(bool $value): static
    {
        $this->restrictChatIsForum = $value;

        return $this;
    }

    public function setUserAdministratorRights(?ChatAdministratorRights $value): static
    {
        $this->userAdministratorRights = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                      => static::TYPE_NAME,
            'bot_administrator_rights'   => (null !== $this->botAdministratorRights ? $this->botAdministratorRights->jsonSerialize() : null),
            'bot_is_member'              => $this->botIsMember,
            'chat_has_username'          => $this->chatHasUsername,
            'chat_is_channel'            => $this->chatIsChannel,
            'chat_is_created'            => $this->chatIsCreated,
            'chat_is_forum'              => $this->chatIsForum,
            'id'                         => $this->id,
            'request_photo'              => $this->requestPhoto,
            'request_title'              => $this->requestTitle,
            'request_username'           => $this->requestUsername,
            'restrict_chat_has_username' => $this->restrictChatHasUsername,
            'restrict_chat_is_forum'     => $this->restrictChatIsForum,
            'user_administrator_rights'  => (null !== $this->userAdministratorRights ? $this->userAdministratorRights->jsonSerialize() : null),
        ];
    }
}
