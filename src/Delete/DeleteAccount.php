<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Delete;

use Totaldev\TgSchema\TdFunction;

/**
 * Deletes the account of the current user, deleting all information associated with the user from the server. The phone number of the account can be used to
 * create a new account. Can be called before authorization when the current authorization state is authorizationStateWaitPassword.
 */
class DeleteAccount extends TdFunction
{
    public const string TYPE_NAME = 'deleteAccount';

    public function __construct(
        /**
         * The 2-step verification password of the current user. If the current user isn't authorized, then an empty string can be passed and account deletion can be canceled within one week.
         */
        protected string $password,
        /**
         * The reason why the account was deleted; optional.
         */
        protected string $reason,
    ) {}

    public static function fromArray(array $array): DeleteAccount
    {
        return new static(
            password: $array['password'],
            reason  : $array['reason'],
        );
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getReason(): string
    {
        return $this->reason;
    }

    public function setPassword(string $value): static
    {
        $this->password = $value;

        return $this;
    }

    public function setReason(string $value): static
    {
        $this->reason = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'password' => $this->password,
            'reason'   => $this->reason,
        ];
    }
}
