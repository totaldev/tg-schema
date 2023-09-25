<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The chat contains a public service announcement
 */
class ChatSourcePublicServiceAnnouncement extends ChatSource
{
    public const TYPE_NAME = 'chatSourcePublicServiceAnnouncement';

    /**
     * The text of the announcement
     *
     * @var string
     */
    protected string $text;

    /**
     * The type of the announcement
     *
     * @var string
     */
    protected string $type;

    public function __construct(string $type, string $text)
    {
        parent::__construct();

        $this->type = $type;
        $this->text = $text;
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
            'type' => $this->type,
            'text' => $this->text,
        ];
    }
}
