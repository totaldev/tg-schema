<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Push;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A general message with hidden content
 */
class PushMessageContentHidden extends PushMessageContent
{
    public const TYPE_NAME = 'pushMessageContentHidden';

    /**
     * True, if the message is a pinned message with the specified content
     *
     * @var bool
     */
    protected bool $isPinned;

    public function __construct(bool $isPinned)
    {
        parent::__construct();

        $this->isPinned = $isPinned;
    }

    public static function fromArray(array $array): PushMessageContentHidden
    {
        return new static(
            $array['is_pinned'],
        );
    }

    public function getIsPinned(): bool
    {
        return $this->isPinned;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'is_pinned' => $this->isPinned,
        ];
    }
}
