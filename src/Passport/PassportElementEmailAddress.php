<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Passport;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A Telegram Passport element containing the user's email address
 */
class PassportElementEmailAddress extends PassportElement
{
    public const TYPE_NAME = 'passportElementEmailAddress';

    /**
     * Email address
     *
     * @var string
     */
    protected string $emailAddress;

    public function __construct(string $emailAddress)
    {
        parent::__construct();

        $this->emailAddress = $emailAddress;
    }

    public static function fromArray(array $array): PassportElementEmailAddress
    {
        return new static(
            $array['email_address'],
        );
    }

    public function getEmailAddress(): string
    {
        return $this->emailAddress;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'email_address' => $this->emailAddress,
        ];
    }
}
