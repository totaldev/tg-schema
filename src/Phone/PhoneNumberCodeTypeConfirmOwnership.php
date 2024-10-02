<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Phone;

/**
 * Confirms ownership of a phone number to prevent account deletion while handling links of the type internalLinkTypePhoneNumberConfirmation.
 */
class PhoneNumberCodeTypeConfirmOwnership extends PhoneNumberCodeType
{
    public const TYPE_NAME = 'phoneNumberCodeTypeConfirmOwnership';

    public function __construct(
        /**
         * Hash value from the link.
         */
        protected string $hash
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PhoneNumberCodeTypeConfirmOwnership
    {
        return new static(
            $array['hash'],
        );
    }

    public function getHash(): string
    {
        return $this->hash;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'hash'  => $this->hash,
        ];
    }
}
