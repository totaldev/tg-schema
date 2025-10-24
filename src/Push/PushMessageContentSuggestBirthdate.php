<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Push;

/**
 * A birthdate was suggested to be set.
 */
class PushMessageContentSuggestBirthdate extends PushMessageContent
{
    public const string TYPE_NAME = 'pushMessageContentSuggestBirthdate';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PushMessageContentSuggestBirthdate
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
