<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Push;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A text message
 */
class PushMessageContentText extends PushMessageContent
{
    public const TYPE_NAME = 'pushMessageContentText';

    /**
     * Message text
     *
     * @var string
     */
    protected string $text;

    /**
     * True, if the message is a pinned message with the specified content
     *
     * @var bool
     */
    protected bool $isPinned;

    public function __construct(string $text, bool $isPinned)
    {
        parent::__construct();

        $this->text = $text;
        $this->isPinned = $isPinned;
    }

    public static function fromArray(array $array): PushMessageContentText
    {
        return new static(
            $array['text'],
            $array['is_pinned'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'text' => $this->text,
            'is_pinned' => $this->isPinned,
        ];
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function getIsPinned(): bool
    {
        return $this->isPinned;
    }
}
