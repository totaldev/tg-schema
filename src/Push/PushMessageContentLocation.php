<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Push;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A message with a location
 */
class PushMessageContentLocation extends PushMessageContent
{
    public const TYPE_NAME = 'pushMessageContentLocation';

    /**
     * True, if the location is live
     *
     * @var bool
     */
    protected bool $isLive;

    /**
     * True, if the message is a pinned message with the specified content
     *
     * @var bool
     */
    protected bool $isPinned;

    public function __construct(bool $isLive, bool $isPinned)
    {
        parent::__construct();

        $this->isLive = $isLive;
        $this->isPinned = $isPinned;
    }

    public static function fromArray(array $array): PushMessageContentLocation
    {
        return new static(
            $array['is_live'],
            $array['is_pinned'],
        );
    }

    public function getIsLive(): bool
    {
        return $this->isLive;
    }

    public function getIsPinned(): bool
    {
        return $this->isPinned;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'is_live' => $this->isLive,
            'is_pinned' => $this->isPinned,
        ];
    }
}
