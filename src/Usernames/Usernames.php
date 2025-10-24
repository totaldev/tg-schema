<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Usernames;

use Totaldev\TgSchema\TdObject;

/**
 * Describes usernames assigned to a user, a supergroup, or a channel.
 */
class Usernames extends TdObject
{
    public const string TYPE_NAME = 'usernames';

    public function __construct(
        /**
         * List of active usernames; the first one must be shown as the primary username. The order of active usernames can be changed with reorderActiveUsernames, reorderBotActiveUsernames or reorderSupergroupActiveUsernames.
         *
         * @var string[]
         */
        protected array  $activeUsernames,
        /**
         * List of currently disabled usernames; the username can be activated with toggleUsernameIsActive, toggleBotUsernameIsActive, or toggleSupergroupUsernameIsActive.
         *
         * @var string[]
         */
        protected array  $disabledUsernames,
        /**
         * Active or disabled username, which may be changed with setUsername or setSupergroupUsername. Information about other active usernames can be received using getCollectibleItemInfo.
         */
        protected string $editableUsername,
    ) {}

    public static function fromArray(array $array): Usernames
    {
        return new static(
            $array['active_usernames'],
            $array['disabled_usernames'],
            $array['editable_username'],
        );
    }

    public function getActiveUsernames(): array
    {
        return $this->activeUsernames;
    }

    public function getDisabledUsernames(): array
    {
        return $this->disabledUsernames;
    }

    public function getEditableUsername(): string
    {
        return $this->editableUsername;
    }

    public function setActiveUsernames(array $value): static
    {
        $this->activeUsernames = $value;

        return $this;
    }

    public function setDisabledUsernames(array $value): static
    {
        $this->disabledUsernames = $value;

        return $this;
    }

    public function setEditableUsername(string $value): static
    {
        $this->editableUsername = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'              => static::TYPE_NAME,
            'active_usernames'   => $this->activeUsernames,
            'disabled_usernames' => $this->disabledUsernames,
            'editable_username'  => $this->editableUsername,
        ];
    }
}
