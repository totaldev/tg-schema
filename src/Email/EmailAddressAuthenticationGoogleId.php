<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Email;

/**
 * An authentication token received through Google ID
 */
class EmailAddressAuthenticationGoogleId extends EmailAddressAuthentication
{
    public const TYPE_NAME = 'emailAddressAuthenticationGoogleId';

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

    public static function fromArray(array $array): EmailAddressAuthenticationGoogleId
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
