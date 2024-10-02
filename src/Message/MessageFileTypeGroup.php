<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

/**
 * The messages were exported from a group chat.
 */
class MessageFileTypeGroup extends MessageFileType
{
    public const TYPE_NAME = 'messageFileTypeGroup';

    public function __construct(
        /**
         * Title of the group chat; may be empty if unrecognized.
         */
        protected string $title
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageFileTypeGroup
    {
        return new static(
            $array['title'],
        );
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'title' => $this->title,
        ];
    }
}
