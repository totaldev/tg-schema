<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Delete;

use Totaldev\TgSchema\TdFunction;

/**
 * Deletes all call messages.
 */
class DeleteAllCallMessages extends TdFunction
{
    public const string TYPE_NAME = 'deleteAllCallMessages';

    public function __construct(
        /**
         * Pass true to delete the messages for all users.
         */
        protected bool $revoke
    ) {}

    public static function fromArray(array $array): DeleteAllCallMessages
    {
        return new static(
            revoke: $array['revoke'],
        );
    }

    public function getRevoke(): bool
    {
        return $this->revoke;
    }

    public function setRevoke(bool $value): static
    {
        $this->revoke = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'  => static::TYPE_NAME,
            'revoke' => $this->revoke,
        ];
    }
}
