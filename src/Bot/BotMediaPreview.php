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
    public const string TYPE_NAME = 'botMediaPreview';

    public function __construct(
        /**
         * Content of the preview.
         */
        protected StoryContent $content,
        /**
         * Point in time (Unix timestamp) when the preview was added or changed last time.
         */
        protected int          $date,
    ) {}

    public static function fromArray(array $array): BotMediaPreview
    {
        return new static(
            content: TdSchemaRegistry::fromArray($array['content']),
            date   : $array['date'],
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

    public function setContent(StoryContent $value): static
    {
        $this->content = $value;

        return $this;
    }

    public function setDate(int $value): static
    {
        $this->date = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'content' => $this->content->jsonSerialize(),
            'date'    => $this->date,
        ];
    }
}
