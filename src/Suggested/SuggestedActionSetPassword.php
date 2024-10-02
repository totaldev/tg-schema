<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Suggested;

/**
 * Suggests the user to set a 2-step verification password to be able to log in again.
 */
class SuggestedActionSetPassword extends SuggestedAction
{
    public const TYPE_NAME = 'suggestedActionSetPassword';

    public function __construct(
        /**
         * The number of days to pass between consecutive authorizations if the user declines to set password; if 0, then the user is advised to set the password for security reasons.
         */
        protected int $authorizationDelay
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): SuggestedActionSetPassword
    {
        return new static(
            $array['authorization_delay'],
        );
    }

    public function getAuthorizationDelay(): int
    {
        return $this->authorizationDelay;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'               => static::TYPE_NAME,
            'authorization_delay' => $this->authorizationDelay,
        ];
    }
}
