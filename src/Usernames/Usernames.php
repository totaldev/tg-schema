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
    public const TYPE_NAME = 'usernames';

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
         * The active username, which can be changed with setUsername or setSupergroupUsername. Information about other active usernames can be received using getCollectibleItemInfo.
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
