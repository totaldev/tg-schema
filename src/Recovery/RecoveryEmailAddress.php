<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Recovery;

use Totaldev\TgSchema\TdObject;

/**
 * Contains information about the current recovery email address.
 */
class RecoveryEmailAddress extends TdObject
{
    public const string TYPE_NAME = 'recoveryEmailAddress';

    public function __construct(
        /**
         * Recovery email address.
         */
        protected string $recoveryEmailAddress
    ) {}

    public static function fromArray(array $array): RecoveryEmailAddress
    {
        return new static(
            $array['recovery_email_address'],
        );
    }

    public function getRecoveryEmailAddress(): string
    {
        return $this->recoveryEmailAddress;
    }

    public function setRecoveryEmailAddress(string $value): static
    {
        $this->recoveryEmailAddress = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                  => static::TYPE_NAME,
            'recovery_email_address' => $this->recoveryEmailAddress,
        ];
    }
}
