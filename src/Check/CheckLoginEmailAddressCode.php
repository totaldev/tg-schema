<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Check;

use Totaldev\TgSchema\Email\EmailAddressAuthentication;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Checks the login email address authentication.
 */
class CheckLoginEmailAddressCode extends TdFunction
{
    public const TYPE_NAME = 'checkLoginEmailAddressCode';

    public function __construct(
        /**
         * Email address authentication to check.
         */
        protected EmailAddressAuthentication $code
    ) {}

    public static function fromArray(array $array): CheckLoginEmailAddressCode
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
