<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Email;

/**
 * An authentication code delivered to a user's email address.
 */
class EmailAddressAuthenticationCode extends EmailAddressAuthentication
{
    public const TYPE_NAME = 'emailAddressAuthenticationCode';

    public function __construct(
        /**
         * The code.
         */
        protected string $code
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): EmailAddressAuthenticationCode
    {
        return new static(
            $array['code'],
        );
    }

    public function getCode(): string
    {
        return $this->code;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'code'  => $this->code,
        ];
    }
}
