<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A message content that is not supported in the current TDLib version
 */
class MessageUnsupported extends MessageContent
{
    public const TYPE_NAME = 'messageUnsupported';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageUnsupported
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}