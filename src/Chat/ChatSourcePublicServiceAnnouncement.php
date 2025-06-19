<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

/**
 * The chat contains a public service announcement.
 */
class ChatSourcePublicServiceAnnouncement extends ChatSource
{
    public const TYPE_NAME = 'chatSourcePublicServiceAnnouncement';

    public function __construct(
        /**
         * The type of the announcement.
         */
        protected string $type,
        /**
         * The text of the announcement.
         */
        protected string $text
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatSourcePublicServiceAnnouncement
    {
        return new static(
            $array['type'],
            $array['text'],
        );
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'type'  => $this->type,
            'text'  => $this->text,
        ];
    }
}
