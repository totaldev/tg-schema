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
    public const string TYPE_NAME = 'chatSourcePublicServiceAnnouncement';

    public function __construct(
        /**
         * The text of the announcement.
         */
        protected string $text,
        /**
         * The type of the announcement.
         */
        protected string $type,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatSourcePublicServiceAnnouncement
    {
        return new static(
            text: $array['text'],
            type: $array['type'],
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

    public function setText(string $value): static
    {
        $this->text = $value;

        return $this;
    }

    public function setType(string $value): static
    {
        $this->type = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'text'  => $this->text,
            'type'  => $this->type,
        ];
    }
}
