<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdObject;

/**
 * Represents an icon for a chat folder.
 */
class ChatFolderIcon extends TdObject
{
    public const string TYPE_NAME = 'chatFolderIcon';

    public function __construct(
        /**
         * The chosen icon name for short folder representation; one of "All", "Unread", "Unmuted", "Bots", "Channels", "Groups", "Private", "Custom", "Setup", "Cat", "Crown", "Favorite", "Flower", "Game", "Home", "Love", "Mask", "Party", "Sport", "Study", "Trade", "Travel", "Work", "Airplane", "Book", "Light", "Like", "Money", "Note", "Palette".
         */
        protected string $name
    ) {}

    public static function fromArray(array $array): ChatFolderIcon
    {
        return new static(
            name: $array['name'],
        );
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $value): static
    {
        $this->name = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'name'  => $this->name,
        ];
    }
}
