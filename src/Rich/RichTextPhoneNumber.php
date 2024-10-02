<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Rich;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A rich text phone number.
 */
class RichTextPhoneNumber extends RichText
{
    public const TYPE_NAME = 'richTextPhoneNumber';

    public function __construct(
        /**
         * Text.
         */
        protected RichText $text,
        /**
         * Phone number.
         */
        protected string   $phoneNumber,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): RichTextPhoneNumber
    {
        return new static(
            TdSchemaRegistry::fromArray($array['text']),
            $array['phone_number'],
        );
    }

    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    public function getText(): RichText
    {
        return $this->text;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'text'         => $this->text->typeSerialize(),
            'phone_number' => $this->phoneNumber,
        ];
    }
}
