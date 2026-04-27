<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Push;

/**
 * A text message.
 */
class PushMessageContentText extends PushMessageContent
{
    public const string TYPE_NAME = 'pushMessageContentText';

    public function __construct(
        /**
         * True, if the message is a pinned message with the specified content.
         */
        protected bool   $isPinned,
        /**
         * Message text.
         */
        protected string $text,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PushMessageContentText
    {
        return new static(
            isPinned: $array['is_pinned'],
            text    : $array['text'],
        );
    }

    public function getIsPinned(): bool
    {
        return $this->isPinned;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function setIsPinned(bool $value): static
    {
        $this->isPinned = $value;

        return $this;
    }

    public function setText(string $value): static
    {
        $this->text = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'is_pinned' => $this->isPinned,
            'text'      => $this->text,
        ];
    }
}
