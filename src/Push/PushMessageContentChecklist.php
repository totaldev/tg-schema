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
         * Checklist title.
         */
        protected string $title,
        /**
         * True, if the message is a pinned message with the specified content.
         */
        protected bool   $isPinned,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PushMessageContentChecklist
    {
        return new static(
            $array['title'],
            $array['is_pinned'],
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
            'title'     => $this->title,
            'is_pinned' => $this->isPinned,
        ];
    }
}
