<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

namespace Totaldev\TgSchema\Usernames;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes usernames assigned to a user, a supergroup, or a channel
 */
class Usernames extends TdObject
{
    public const TYPE_NAME = 'usernames';

    /**
     * List of active usernames; the first one must be shown as the primary username. The order of active usernames can be changed with reorderActiveUsernames, reorderBotActiveUsernames or reorderSupergroupActiveUsernames
     *
     * @var string[]
     */
    protected array $activeUsernames;

    /**
     * List of currently disabled usernames; the username can be activated with toggleUsernameIsActive, toggleBotUsernameIsActive, or toggleSupergroupUsernameIsActive
     *
     * @var string[]
     */
    protected array $disabledUsernames;

    /**
     * The active username, which can be changed with setUsername or setSupergroupUsername
     *
     * @var string
     */
    protected string $editableUsername;

    public function __construct(array $activeUsernames, array $disabledUsernames, string $editableUsername)
    {
        $this->activeUsernames = $activeUsernames;
        $this->disabledUsernames = $disabledUsernames;
        $this->editableUsername = $editableUsername;
    }

    public static function fromArray(array $array): Usernames
    {
        return new static(
            $array['active_usernames'],
            $array['disabled_usernames'],
            $array['editable_username'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'active_usernames' => $this->activeUsernames,
            'disabled_usernames' => $this->disabledUsernames,
            'editable_username' => $this->editableUsername,
        ];
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
}
