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
    public const TYPE_NAME = 'pushMessageContentText';

    public function __construct(
        /**
         * Message text.
         */
        protected string $text,
        /**
         * True, if the message is a pinned message with the specified content.
         */
        protected bool   $isPinned
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PushMessageContentText
    {
        return new static(
            $array['text'],
            $array['is_pinned'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'text'      => $this->text,
            'is_pinned' => $this->isPinned,
        ];
    }
}
