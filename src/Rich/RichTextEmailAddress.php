<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Rich;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A rich text email link.
 */
class RichTextEmailAddress extends RichText
{
    public const string TYPE_NAME = 'richTextEmailAddress';

    public function __construct(
        /**
         * Email address.
         */
        protected string   $emailAddress,
        /**
         * Text.
         */
        protected RichText $text,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): RichTextEmailAddress
    {
        return new static(
            emailAddress: $array['email_address'],
            text        : TdSchemaRegistry::fromArray($array['text']),
        );
    }

    public function getEmailAddress(): string
    {
        return $this->emailAddress;
    }

    public function getText(): RichText
    {
        return $this->text;
    }

    public function setEmailAddress(string $value): static
    {
        $this->emailAddress = $value;

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
            '@type'         => static::TYPE_NAME,
            'email_address' => $this->emailAddress,
            'text'          => $this->text->jsonSerialize(),
        ];
    }
}
