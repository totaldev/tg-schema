<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

/**
 * The chat description was changed.
 */
class ChatEventDescriptionChanged extends ChatEventAction
{
    public const TYPE_NAME = 'chatEventDescriptionChanged';

    public function __construct(
        /**
         * Previous chat description.
         */
        protected string $oldDescription,
        /**
         * New chat description.
         */
        protected string $newDescription
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatEventDescriptionChanged
    {
        return new static(
            $array['old_description'],
            $array['new_description'],
        );
    }

    public function getNewDescription(): string
    {
        return $this->newDescription;
    }

    public function getOldDescription(): string
    {
        return $this->oldDescription;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'old_description' => $this->oldDescription,
            'new_description' => $this->newDescription,
        ];
    }
}
