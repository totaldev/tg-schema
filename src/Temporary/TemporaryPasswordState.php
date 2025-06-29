<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Temporary;

use Totaldev\TgSchema\TdObject;

/**
 * Returns information about the availability of a temporary password, which can be used for payments.
 */
class TemporaryPasswordState extends TdObject
{
    public const TYPE_NAME = 'temporaryPasswordState';

    public function __construct(
        /**
         * True, if a temporary password is available.
         */
        protected bool $hasPassword,
        /**
         * Time left before the temporary password expires, in seconds.
         */
        protected int  $validFor
    ) {}

    public static function fromArray(array $array): TemporaryPasswordState
    {
        return new static(
            $array['has_password'],
            $array['valid_for'],
        );
    }

    public function getHasPassword(): bool
    {
        return $this->hasPassword;
    }

    public function getValidFor(): int
    {
        return $this->validFor;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'has_password' => $this->hasPassword,
            'valid_for'    => $this->validFor,
        ];
    }
}
