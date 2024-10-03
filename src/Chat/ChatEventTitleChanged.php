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
    public const TYPE_NAME = 'chatEventTitleChanged';

    public function __construct(
        /**
         * Previous chat title.
         */
        protected string $oldTitle,
        /**
         * New chat title.
         */
        protected string $newTitle,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatEventTitleChanged
    {
        return new static(
            $array['old_title'],
            $array['new_title'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'old_title' => $this->oldTitle,
            'new_title' => $this->newTitle,
        ];
    }
}
