<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Email;

/**
 * Email address reset has already been requested. Call resetAuthenticationEmailAddress to check whether immediate reset is possible
 */
class EmailAddressResetStatePending extends EmailAddressResetState
{
    public const TYPE_NAME = 'emailAddressResetStatePending';

    /**
     * Left time before the email address will be reset, in seconds. updateAuthorizationState is not sent when this field changes
     *
     * @var int
     */
    protected int $resetIn;

    public function __construct(int $resetIn)
    {
        parent::__construct();

        $this->resetIn = $resetIn;
    }

    public static function fromArray(array $array): EmailAddressResetStatePending
    {
        return new static(
            $array['reset_in'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'reset_in' => $this->resetIn,
        ];
    }

    public function getResetIn(): int
    {
        return $this->resetIn;
    }
}
