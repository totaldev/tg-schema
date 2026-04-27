<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Push;

/**
 * A message with a checklist.
 */
class PushMessageContentChecklist extends PushMessageContent
{
    public const string TYPE_NAME = 'pushMessageContentChecklist';

    public function __construct(
        /**
         * True, if the message is a pinned message with the specified content.
         */
        protected bool   $isPinned,
        /**
         * Checklist title.
         */
        protected string $title,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PushMessageContentChecklist
    {
        return new static(
            isPinned: $array['is_pinned'],
            title   : $array['title'],
        );
    }

    public function getIsPinned(): bool
    {
        return $this->isPinned;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setIsPinned(bool $value): static
    {
        $this->isPinned = $value;

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
            '@type'     => static::TYPE_NAME,
            'is_pinned' => $this->isPinned,
            'title'     => $this->title,
        ];
    }
}
