<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Push;

/**
 * A general message with hidden content.
 */
class PushMessageContentHidden extends PushMessageContent
{
    public const TYPE_NAME = 'pushMessageContentHidden';

    public function __construct(
        /**
         * True, if the message is a pinned message with the specified content.
         */
        protected bool $isPinned
    ) {
        parent::__construct();
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
            '@type'     => static::TYPE_NAME,
            'is_pinned' => $this->isPinned,
        ];
    }
}
