<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Business;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains information about a business chat link.
 */
class BusinessChatLink extends TdObject
{
    public const TYPE_NAME = 'businessChatLink';

    public function __construct(
        /**
         * The HTTPS link.
         */
        protected string        $link,
        /**
         * Message draft text that will be added to the input field.
         */
        protected FormattedText $text,
        /**
         * Link title.
         */
        protected string        $title,
        /**
         * Number of times the link was used.
         */
        protected int           $viewCount,
    ) {}

    public static function fromArray(array $array): BusinessChatLink
    {
        return new static(
            $array['link'],
            TdSchemaRegistry::fromArray($array['text']),
            $array['title'],
            $array['view_count'],
        );
    }

    public function getLink(): string
    {
        return $this->link;
    }

    public function getText(): FormattedText
    {
        return $this->text;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getViewCount(): int
    {
        return $this->viewCount;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'link'       => $this->link,
            'text'       => $this->text->typeSerialize(),
            'title'      => $this->title,
            'view_count' => $this->viewCount,
        ];
    }
}
