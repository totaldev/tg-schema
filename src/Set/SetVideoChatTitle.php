<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\TdFunction;

/**
 * Sets title of a video chat; requires groupCall.can_be_managed right.
 */
class SetVideoChatTitle extends TdFunction
{
    public const string TYPE_NAME = 'setVideoChatTitle';

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

    public static function fromArray(array $array): SetVideoChatTitle
    {
        return new static(
            groupCallId: $array['group_call_id'],
            title      : $array['title'],
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

    public function setGroupCallId(int $value): static
    {
        $this->groupCallId = $value;

        return $this;
    }

    public function setTitle(string $value): static
    {
        $this->title = $value;

        return $this;
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
