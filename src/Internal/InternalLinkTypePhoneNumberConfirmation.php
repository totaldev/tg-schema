<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Internal;

/**
 * The link can be used to confirm ownership of a phone number to prevent account deletion. Call sendPhoneNumberCode with the given phone number and with
 * phoneNumberCodeTypeConfirmOwnership with the given hash to process the link. If succeeded, call checkPhoneNumberCode to check entered by the user code, or
 * resendPhoneNumberCode to resend it.
 */
class InternalLinkTypePhoneNumberConfirmation extends InternalLinkType
{
    public const TYPE_NAME = 'internalLinkTypePhoneNumberConfirmation';

    public function __construct(
        /**
         * Hash value from the link.
         */
        protected string $hash,
        /**
         * Phone number value from the link.
         */
        protected string $phoneNumber
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InternalLinkTypePhoneNumberConfirmation
    {
        return new static(
            $array['hash'],
            $array['phone_number'],
        );
    }

    public function getHash(): string
    {
        return $this->hash;
    }

    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'hash'         => $this->hash,
            'phone_number' => $this->phoneNumber,
        ];
    }
}
