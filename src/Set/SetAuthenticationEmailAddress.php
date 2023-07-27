<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Sets the email address of the user and sends an authentication code to the email address. Works only when the current authorization state is authorizationStateWaitEmailAddress
 */
class SetAuthenticationEmailAddress extends TdFunction
{
    public const TYPE_NAME = 'setAuthenticationEmailAddress';

    /**
     * The email address of the user
     *
     * @var string
     */
    protected string $emailAddress;

    public function __construct(string $emailAddress)
    {
        $this->emailAddress = $emailAddress;
    }

    public static function fromArray(array $array): SetAuthenticationEmailAddress
    {
        return new static(
            $array['email_address'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'email_address' => $this->emailAddress,
        ];
    }

    public function getEmailAddress(): string
    {
        return $this->emailAddress;
    }
}
