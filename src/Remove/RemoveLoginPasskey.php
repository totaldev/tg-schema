<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Remove;

use Totaldev\TgSchema\TdFunction;

/**
 * Removes a passkey from the list of passkeys allowed to be used for the login by the current user.
 */
class RemoveLoginPasskey extends TdFunction
{
    public const string TYPE_NAME = 'removeLoginPasskey';

    public function __construct(
        /**
         * Unique identifier of the passkey to remove.
         */
        protected string $passkeyId
    ) {}

    public static function fromArray(array $array): RemoveLoginPasskey
    {
        return new static(
            passkeyId: $array['passkey_id'],
        );
    }

    public function getPasskeyId(): string
    {
        return $this->passkeyId;
    }

    public function setPasskeyId(string $value): static
    {
        $this->passkeyId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'passkey_id' => $this->passkeyId,
        ];
    }
}
