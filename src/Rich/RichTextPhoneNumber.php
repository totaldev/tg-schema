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
    public const string TYPE_NAME = 'richTextPhoneNumber';

    public function __construct(
        /**
         * Phone number.
         */
        protected string   $phoneNumber,
        /**
         * Text.
         */
        protected RichText $text,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): RichTextPhoneNumber
    {
        return new static(
            phoneNumber: $array['phone_number'],
            text       : TdSchemaRegistry::fromArray($array['text']),
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

    public function setPhoneNumber(string $value): static
    {
        $this->phoneNumber = $value;

        return $this;
    }

    public function setText(RichText $value): static
    {
        $this->text = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'phone_number' => $this->phoneNumber,
            'text'         => $this->text->jsonSerialize(),
        ];
    }
}
