<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns information about a phone number by its prefix. Can be called before authorization.
 */
class GetPhoneNumberInfo extends TdFunction
{
    public const TYPE_NAME = 'getPhoneNumberInfo';

    public function __construct(
        /**
         * The phone number prefix.
         */
        protected string $phoneNumberPrefix
    ) {}

    public static function fromArray(array $array): GetPhoneNumberInfo
    {
        return new static(
            $array['phone_number_prefix'],
        );
    }

    public function getPhoneNumberPrefix(): string
    {
        return $this->phoneNumberPrefix;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'               => static::TYPE_NAME,
            'phone_number_prefix' => $this->phoneNumberPrefix,
        ];
    }
}
