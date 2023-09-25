<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Email;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Information about the email address authentication code that was sent
 */
class EmailAddressAuthenticationCodeInfo extends TdObject
{
    public const TYPE_NAME = 'emailAddressAuthenticationCodeInfo';

    /**
     * Pattern of the email address to which an authentication code was sent
     *
     * @var string
     */
    protected string $emailAddressPattern;

    /**
     * Length of the code; 0 if unknown
     *
     * @var int
     */
    protected int $length;

    public function __construct(string $emailAddressPattern, int $length)
    {
        $this->emailAddressPattern = $emailAddressPattern;
        $this->length = $length;
    }

    public static function fromArray(array $array): EmailAddressAuthenticationCodeInfo
    {
        return new static(
            $array['email_address_pattern'],
            $array['length'],
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

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'email_address_pattern' => $this->emailAddressPattern,
            'length' => $this->length,
        ];
    }
}
