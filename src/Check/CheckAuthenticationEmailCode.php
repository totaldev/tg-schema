<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Check;

use Totaldev\TgSchema\TdFunction;

/**
 * Checks the authentication of a email address. Works only when the current authorization state is authorizationStateWaitEmailCode
 */
class CheckAuthenticationEmailCode extends TdFunction
{
    public const TYPE_NAME = 'checkAuthenticationEmailCode';

    /**
     * Email address authentication to check
     *
     * @var EmailAddressAuthentication
     */
    protected EmailAddressAuthentication $code;

    public function __construct(EmailAddressAuthentication $code)
    {
        $this->code = $code;
    }

    public static function fromArray(array $array): CheckAuthenticationEmailCode
    {
        return new static(
            TdSchemaRegistry::fromArray($array['code']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'code' => $this->code->typeSerialize(),
        ];
    }

    public function getCode(): EmailAddressAuthentication
    {
        return $this->code;
    }
}
