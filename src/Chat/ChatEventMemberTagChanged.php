<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

/**
 * A chat member tag has been changed.
 */
class ChatEventMemberTagChanged extends ChatEventAction
{
    public const string TYPE_NAME = 'chatEventMemberTagChanged';

    public function __construct(
        /**
         * New tag of the chat member.
         */
        protected string $newTag,
        /**
         * Previous tag of the chat member.
         */
        protected string $oldTag,
        /**
         * Affected chat member user identifier.
         */
        protected int    $userId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatEventMemberTagChanged
    {
        return new static(
            newTag: $array['new_tag'],
            oldTag: $array['old_tag'],
            userId: $array['user_id'],
        );
    }

    public function getNewTag(): string
    {
        return $this->newTag;
    }

    public function getOldTag(): string
    {
        return $this->oldTag;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function setNewTag(string $value): static
    {
        $this->newTag = $value;

        return $this;
    }

    public function setOldTag(string $value): static
    {
        $this->oldTag = $value;

        return $this;
    }

    public function setUserId(int $value): static
    {
        $this->userId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'new_tag' => $this->newTag,
            'old_tag' => $this->oldTag,
            'user_id' => $this->userId,
        ];
    }
}
