<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes a business chat link to create or edit.
 */
class InputBusinessChatLink extends TdObject
{
    public const TYPE_NAME = 'inputBusinessChatLink';

    public function __construct(
        /**
         * Message draft text that will be added to the input field.
         */
        protected FormattedText $text,
        /**
         * Link title.
         */
        protected string        $title
    ) {}

    public static function fromArray(array $array): InputBusinessChatLink
    {
        return new static(
            TdSchemaRegistry::fromArray($array['text']),
            $array['title'],
        );
    }

    public function getText(): FormattedText
    {
        return $this->text;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'text'  => $this->text->typeSerialize(),
            'title' => $this->title,
        ];
    }
}
