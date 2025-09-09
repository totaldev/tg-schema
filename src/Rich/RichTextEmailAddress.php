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
    public const TYPE_NAME = 'richTextEmailAddress';

    public function __construct(
        /**
         * Text.
         */
        protected RichText $text,
        /**
         * Email address.
         */
        protected string   $emailAddress,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): RichTextEmailAddress
    {
        return new static(
            TdSchemaRegistry::fromArray($array['text']),
            $array['email_address'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'text'          => $this->text->typeSerialize(),
            'email_address' => $this->emailAddress,
        ];
    }
}
