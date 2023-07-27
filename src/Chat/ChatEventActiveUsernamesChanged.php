<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Chat;

/**
 * The chat active usernames were changed
 */
class ChatEventActiveUsernamesChanged extends ChatEventAction
{
    public const TYPE_NAME = 'chatEventActiveUsernamesChanged';

    /**
     * Previous list of active usernames
     *
     * @var string[]
     */
    protected array $oldUsernames;

    /**
     * New list of active usernames
     *
     * @var string[]
     */
    protected array $newUsernames;

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

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'old_usernames' => $this->oldUsernames,
            'new_usernames' => $this->newUsernames,
        ];
    }

    public function getOldUsernames(): array
    {
        return $this->oldUsernames;
    }

    public function getNewUsernames(): array
    {
        return $this->newUsernames;
    }
}
