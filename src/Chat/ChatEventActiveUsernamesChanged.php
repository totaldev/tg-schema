<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

/**
 * The chat active usernames were changed.
 */
class ChatEventActiveUsernamesChanged extends ChatEventAction
{
    public const string TYPE_NAME = 'chatEventActiveUsernamesChanged';

    public function __construct(
        /**
         * New list of active usernames.
         *
         * @var string[]
         */
        protected array $newUsernames,
        /**
         * Previous list of active usernames.
         *
         * @var string[]
         */
        protected array $oldUsernames,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatEventActiveUsernamesChanged
    {
        return new static(
            newUsernames: $array['new_usernames'],
            oldUsernames: $array['old_usernames'],
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

    public function setNewUsernames(array $value): static
    {
        $this->newUsernames = $value;

        return $this;
    }

    public function setOldUsernames(array $value): static
    {
        $this->oldUsernames = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'new_usernames' => $this->newUsernames,
            'old_usernames' => $this->oldUsernames,
        ];
    }
}
