<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The chat active usernames were changed
 */
class ChatEventActiveUsernamesChanged extends ChatEventAction
{
    public const TYPE_NAME = 'chatEventActiveUsernamesChanged';

    /**
     * New list of active usernames
     *
     * @var string[]
     */
    protected array $newUsernames;

    /**
     * Previous list of active usernames
     *
     * @var string[]
     */
    protected array $oldUsernames;

    public function __construct(array $oldUsernames, array $newUsernames)
    {
        parent::__construct();

        $this->oldUsernames = $oldUsernames;
        $this->newUsernames = $newUsernames;
    }

    public static function fromArray(array $array): ChatEventActiveUsernamesChanged
    {
        return new static(
            $array['old_usernames'],
            $array['new_usernames'],
        );
    }

    public function getNewUsernames(): array
    {
        return $this->newUsernames;
    }

    public function getOldUsernames(): array
    {
        return $this->oldUsernames;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'old_usernames' => $this->oldUsernames,
            'new_usernames' => $this->newUsernames,
        ];
    }
}
