<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Push;

use Totaldev\TgSchema\Photo\Photo;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A photo message
 */
class PushMessageContentPhoto extends PushMessageContent
{
    public const TYPE_NAME = 'pushMessageContentPhoto';

    /**
     * Photo caption
     *
     * @var string
     */
    protected string $caption;

    /**
     * True, if the message is a pinned message with the specified content
     *
     * @var bool
     */
    protected bool $isPinned;

    /**
     * True, if the photo is secret
     *
     * @var bool
     */
    protected bool $isSecret;

    /**
     * Message content; may be null
     *
     * @var Photo|null
     */
    protected ?Photo $photo;

    public function __construct(?Photo $photo, string $caption, bool $isSecret, bool $isPinned)
    {
        parent::__construct();

        $this->photo = $photo;
        $this->caption = $caption;
        $this->isSecret = $isSecret;
        $this->isPinned = $isPinned;
    }

    public static function fromArray(array $array): PushMessageContentPhoto
    {
        return new static(
            (isset($array['photo']) ? TdSchemaRegistry::fromArray($array['photo']) : null),
            $array['caption'],
            $array['is_secret'],
            $array['is_pinned'],
        );
    }

    public function getCaption(): string
    {
        return $this->caption;
    }

    public function getIsPinned(): bool
    {
        return $this->isPinned;
    }

    public function getIsSecret(): bool
    {
        return $this->isSecret;
    }

    public function getPhoto(): ?Photo
    {
        return $this->photo;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'photo' => (isset($this->photo) ? $this->photo : null),
            'caption' => $this->caption,
            'is_secret' => $this->isSecret,
            'is_pinned' => $this->isPinned,
        ];
    }
}
