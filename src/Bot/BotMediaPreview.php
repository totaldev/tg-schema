<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Bot;

use Totaldev\TgSchema\Story\StoryContent;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes media previews of a bot.
 */
class BotMediaPreview extends TdObject
{
    public const TYPE_NAME = 'botMediaPreview';

    public function __construct(
        /**
         * Point in time (Unix timestamp) when the preview was added or changed last time.
         */
        protected int          $date,
        /**
         * Content of the preview.
         */
        protected StoryContent $content
    ) {}

    public static function fromArray(array $array): BotMediaPreview
    {
        return new static(
            $array['date'],
            TdSchemaRegistry::fromArray($array['content']),
        );
    }

    public function getContent(): StoryContent
    {
        return $this->content;
    }

    public function getDate(): int
    {
        return $this->date;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'date'    => $this->date,
            'content' => $this->content->typeSerialize(),
        ];
    }
}
