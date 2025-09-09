<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Link;

use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Video\VideoNote;

/**
 * The link is a link to a video note message.
 */
class LinkPreviewTypeVideoNote extends LinkPreviewType
{
    public const TYPE_NAME = 'linkPreviewTypeVideoNote';

    public function __construct(
        /**
         * The video note.
         */
        protected VideoNote $videoNote
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): LinkPreviewTypeVideoNote
    {
        return new static(
            TdSchemaRegistry::fromArray($array['video_note']),
        );
    }

    public function getVideoNote(): VideoNote
    {
        return $this->videoNote;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'video_note' => $this->videoNote->typeSerialize(),
        ];
    }
}
