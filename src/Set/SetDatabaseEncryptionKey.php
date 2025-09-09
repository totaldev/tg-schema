<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\TdFunction;

/**
 * Changes the database encryption key. Usually the encryption key is never changed and is stored in some OS keychain.
 */
class SetDatabaseEncryptionKey extends TdFunction
{
    public const TYPE_NAME = 'setDatabaseEncryptionKey';

    public function __construct(
        /**
         * New encryption key.
         */
        protected string $newEncryptionKey
    ) {}

    public static function fromArray(array $array): SetDatabaseEncryptionKey
    {
        return new static(
            $array['new_encryption_key'],
        );
    }

    public function getNewEncryptionKey(): string
    {
        return $this->newEncryptionKey;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'              => static::TYPE_NAME,
            'new_encryption_key' => $this->newEncryptionKey,
        ];
    }
}
