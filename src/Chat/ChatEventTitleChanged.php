<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

/**
 * The chat title was changed.
 */
class ChatEventTitleChanged extends ChatEventAction
{
    public const string TYPE_NAME = 'chatEventTitleChanged';

    public function __construct(
        /**
         * New chat title.
         */
        protected string $newTitle,
        /**
         * Previous chat title.
         */
        protected string $oldTitle,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatEventTitleChanged
    {
        return new static(
            newTitle: $array['new_title'],
            oldTitle: $array['old_title'],
        );
    }

    public function getNewTitle(): string
    {
        return $this->newTitle;
    }

    public function getOldTitle(): string
    {
        return $this->oldTitle;
    }

    public function setNewTitle(string $value): static
    {
        $this->newTitle = $value;

        return $this;
    }

    public function setOldTitle(string $value): static
    {
        $this->oldTitle = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'new_title' => $this->newTitle,
            'old_title' => $this->oldTitle,
        ];
    }
}
