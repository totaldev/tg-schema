<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

namespace Totaldev\TgSchema\Page;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * An empty block separating a page
 */
class PageBlockDivider extends PageBlock
{
    public const TYPE_NAME = 'pageBlockDivider';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PageBlockDivider
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
