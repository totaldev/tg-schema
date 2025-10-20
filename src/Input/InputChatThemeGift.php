<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

/**
 * A theme based on an upgraded gift.
 */
class InputChatThemeGift extends InputChatTheme
{
    public const TYPE_NAME = 'inputChatThemeGift';

    public function __construct(
        /**
         * Name of the upgraded gift. A gift can be used only in one chat in a time. When the same gift is used in another chat, theme in the previous chat is reset to default.
         */
        protected string $name
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputChatThemeGift
    {
        return new static(
            $array['name'],
        );
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'name'  => $this->name,
        ];
    }
}
