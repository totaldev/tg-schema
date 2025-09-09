<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Check;

use Totaldev\TgSchema\Email\EmailAddressAuthentication;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Checks the authentication of an email address. Works only when the current authorization state is authorizationStateWaitEmailCode.
 */
class CheckAuthenticationEmailCode extends TdFunction
{
    public const TYPE_NAME = 'checkAuthenticationEmailCode';

    public function __construct(
        /**
         * Email address authentication to check.
         */
        protected EmailAddressAuthentication $code
    ) {}

    public static function fromArray(array $array): CheckAuthenticationEmailCode
    {
        return new static(
            TdSchemaRegistry::fromArray($array['code']),
        );
    }

    public function getCode(): EmailAddressAuthentication
    {
        return $this->code;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'code'  => $this->code->typeSerialize(),
        ];
    }
}
