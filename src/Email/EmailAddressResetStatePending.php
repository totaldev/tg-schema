<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Email;

/**
 * Email address reset has already been requested. Call resetAuthenticationEmailAddress to check whether immediate reset is possible.
 */
class EmailAddressResetStatePending extends EmailAddressResetState
{
    public const TYPE_NAME = 'emailAddressResetStatePending';

    public function __construct(
        /**
         * Left time before the email address will be reset, in seconds. updateAuthorizationState is not sent when this field changes.
         */
        protected int $resetIn
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): EmailAddressResetStatePending
    {
        return new static(
            $array['reset_in'],
        );
    }

    public function getResetIn(): int
    {
        return $this->resetIn;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'reset_in' => $this->resetIn,
        ];
    }
}
