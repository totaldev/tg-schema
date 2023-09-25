<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The chat editable username was changed
 */
class ChatEventUsernameChanged extends ChatEventAction
{
    public const TYPE_NAME = 'chatEventUsernameChanged';

    /**
     * New chat username
     *
     * @var string
     */
    protected string $newUsername;

    /**
     * Previous chat username
     *
     * @var string
     */
    protected string $oldUsername;

    public function __construct(string $oldUsername, string $newUsername)
    {
        parent::__construct();

        $this->oldUsername = $oldUsername;
        $this->newUsername = $newUsername;
    }

    public static function fromArray(array $array): ChatEventUsernameChanged
    {
        return new static(
            $array['old_username'],
            $array['new_username'],
        );
    }

    public function getNewUsername(): string
    {
        return $this->newUsername;
    }

    public function getOldUsername(): string
    {
        return $this->oldUsername;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'old_username' => $this->oldUsername,
            'new_username' => $this->newUsername,
        ];
    }
}
