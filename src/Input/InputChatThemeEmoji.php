<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

/**
 * A theme based on an emoji.
 */
class InputChatThemeEmoji extends InputChatTheme
{
    public const string TYPE_NAME = 'inputChatThemeEmoji';

    public function __construct(
        /**
         * Name of the theme.
         */
        protected string $name
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputChatThemeEmoji
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
