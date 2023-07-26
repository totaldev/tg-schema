<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema;

/**
 * Checks the login email address authentication
 */
class CheckLoginEmailAddressCode extends TdFunction
{
    public const TYPE_NAME = 'checkLoginEmailAddressCode';

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

    public static function fromArray(array $array): CheckLoginEmailAddressCode
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
