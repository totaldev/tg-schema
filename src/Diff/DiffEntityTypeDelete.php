<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Diff;

/**
 * Removal of some text.
 */
class DiffEntityTypeDelete extends DiffEntityType
{
    public const string TYPE_NAME = 'diffEntityTypeDelete';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): DiffEntityTypeDelete
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
