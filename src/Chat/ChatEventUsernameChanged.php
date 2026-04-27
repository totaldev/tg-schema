<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

/**
 * The chat editable username was changed.
 */
class ChatEventUsernameChanged extends ChatEventAction
{
    public const string TYPE_NAME = 'chatEventUsernameChanged';

    public function __construct(
        /**
         * New chat username.
         */
        protected string $newUsername,
        /**
         * Previous chat username.
         */
        protected string $oldUsername,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatEventUsernameChanged
    {
        return new static(
            newUsername: $array['new_username'],
            oldUsername: $array['old_username'],
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

    public function setNewUsername(string $value): static
    {
        $this->newUsername = $value;

        return $this;
    }

    public function setOldUsername(string $value): static
    {
        $this->oldUsername = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'new_username' => $this->newUsername,
            'old_username' => $this->oldUsername,
        ];
    }
}
