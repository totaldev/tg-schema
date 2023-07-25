<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema;

/**
 * An authentication token received through Apple ID
 */
class EmailAddressAuthenticationAppleId extends EmailAddressAuthentication
{
    public const TYPE_NAME = 'emailAddressAuthenticationAppleId';

    /**
     * The token
     *
     * @var string
     */
    protected string $token;

    public function __construct(string $token)
    {
        parent::__construct();

        $this->token = $token;
    }

    public static function fromArray(array $array): EmailAddressAuthenticationAppleId
    {
        return new static(
            $array['token'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'token' => $this->token,
        ];
    }

    public function getToken(): string
    {
        return $this->token;
    }
}
