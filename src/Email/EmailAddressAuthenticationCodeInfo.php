<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Email;

use Totaldev\TgSchema\TdObject;

/**
 * Information about the email address authentication code that was sent.
 */
class EmailAddressAuthenticationCodeInfo extends TdObject
{
    public const string TYPE_NAME = 'emailAddressAuthenticationCodeInfo';

    public function __construct(
        /**
         * Pattern of the email address to which an authentication code was sent.
         */
        protected string $emailAddressPattern,
        /**
         * Length of the code; 0 if unknown.
         */
        protected int    $length,
    ) {}

    public static function fromArray(array $array): EmailAddressAuthenticationCodeInfo
    {
        return new static(
            emailAddressPattern: $array['email_address_pattern'],
            length             : $array['length'],
        );
    }

    public function getEmailAddressPattern(): string
    {
        return $this->emailAddressPattern;
    }

    public function getLength(): int
    {
        return $this->length;
    }

    public function setEmailAddressPattern(string $value): static
    {
        $this->emailAddressPattern = $value;

        return $this;
    }

    public function setLength(int $value): static
    {
        $this->length = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'email_address_pattern' => $this->emailAddressPattern,
            'length'                => $this->length,
        ];
    }
}
