<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Changes the database encryption key. Usually the encryption key is never changed and is stored in some OS keychain
 */
class SetDatabaseEncryptionKey extends TdFunction
{
    public const TYPE_NAME = 'setDatabaseEncryptionKey';

    /**
     * New encryption key
     *
     * @var string
     */
    protected string $newEncryptionKey;

    public function __construct(string $newEncryptionKey)
    {
        $this->newEncryptionKey = $newEncryptionKey;
    }

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
            '@type' => static::TYPE_NAME,
            'new_encryption_key' => $this->newEncryptionKey,
        ];
    }
}
