<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Send;

use Totaldev\TgSchema\Phone\PhoneNumberAuthenticationSettings;
use Totaldev\TgSchema\Phone\PhoneNumberCodeType;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Sends a code to the specified phone number. Aborts previous phone number verification if there was one. On success, returns information about the sent code.
 */
class SendPhoneNumberCode extends TdFunction
{
    public const TYPE_NAME = 'sendPhoneNumberCode';

    public function __construct(
        /**
         * The phone number, in international format.
         */
        protected string                             $phoneNumber,
        /**
         * Type of the request for which the code is sent.
         */
        protected PhoneNumberCodeType                $type,
        /**
         * Settings for the authentication of the user's phone number; pass null to use default settings.
         */
        protected ?PhoneNumberAuthenticationSettings $settings = null,
    ) {}

    public static function fromArray(array $array): SendPhoneNumberCode
    {
        return new static(
            $array['phone_number'],
            isset($array['settings']) ? TdSchemaRegistry::fromArray($array['settings']) : null,
            TdSchemaRegistry::fromArray($array['type']),
        );
    }

    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    public function getSettings(): ?PhoneNumberAuthenticationSettings
    {
        return $this->settings;
    }

    public function getType(): PhoneNumberCodeType
    {
        return $this->type;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'phone_number' => $this->phoneNumber,
            'settings'     => $this->settings ?? null,
            'type'         => $this->type->typeSerialize(),
        ];
    }
}
