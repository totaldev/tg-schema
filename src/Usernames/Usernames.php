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
         * Collectible usernames that were purchased at https://fragment.com and can be passed to getCollectibleItemInfo for more details.
         *
         * @var string[]
         */
        protected array  $collectibleUsernames,
        /**
         * List of currently disabled usernames; the username can be activated with toggleUsernameIsActive, toggleBotUsernameIsActive, or toggleSupergroupUsernameIsActive.
         *
         * @var string[]
         */
        protected array  $disabledUsernames,
        /**
         * Active or disabled username, which may be changed with setUsername or setSupergroupUsername.
         */
        protected string $editableUsername,
    ) {}

    public static function fromArray(array $array): Usernames
    {
        return new static(
            activeUsernames     : $array['active_usernames'],
            collectibleUsernames: $array['collectible_usernames'],
            disabledUsernames   : $array['disabled_usernames'],
            editableUsername    : $array['editable_username'],
        );
    }

    public function getActiveUsernames(): array
    {
        return $this->activeUsernames;
    }

    public function getCollectibleUsernames(): array
    {
        return $this->collectibleUsernames;
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

    public function setCollectibleUsernames(array $value): static
    {
        $this->collectibleUsernames = $value;

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
            '@type'                 => static::TYPE_NAME,
            'active_usernames'      => $this->activeUsernames,
            'collectible_usernames' => $this->collectibleUsernames,
            'disabled_usernames'    => $this->disabledUsernames,
            'editable_username'     => $this->editableUsername,
        ];
    }
}
