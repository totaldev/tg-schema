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
    public const string TYPE_NAME = 'chatEventDescriptionChanged';

    public function __construct(
        /**
         * New chat description.
         */
        protected string $newDescription,
        /**
         * Previous chat description.
         */
        protected string $oldDescription,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatEventDescriptionChanged
    {
        return new static(
            newDescription: $array['new_description'],
            oldDescription: $array['old_description'],
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

    public function setNewDescription(string $value): static
    {
        $this->newDescription = $value;

        return $this;
    }

    public function setOldDescription(string $value): static
    {
        $this->oldDescription = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'new_description' => $this->newDescription,
            'old_description' => $this->oldDescription,
        ];
    }
}
