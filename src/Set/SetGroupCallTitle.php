<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\TdFunction;

/**
 * Sets group call title. Requires groupCall.can_be_managed group call flag.
 */
class SetGroupCallTitle extends TdFunction
{
    public const TYPE_NAME = 'setGroupCallTitle';

    public function __construct(
        /**
         * Group call identifier.
         */
        protected int    $groupCallId,
        /**
         * New group call title; 1-64 characters.
         */
        protected string $title,
    ) {}

    public static function fromArray(array $array): SetGroupCallTitle
    {
        return new static(
            $array['group_call_id'],
            $array['title'],
        );
    }

    public function getGroupCallId(): int
    {
        return $this->groupCallId;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'group_call_id' => $this->groupCallId,
            'title'         => $this->title,
        ];
    }
}
