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
         * Previous chat username.
         */
        protected string $oldUsername,
        /**
         * New chat username.
         */
        protected string $newUsername,
    ) {
        parent::__construct();
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
            'old_username' => $this->oldUsername,
            'new_username' => $this->newUsername,
        ];
    }
}
