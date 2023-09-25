<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The messages was exported from a group chat
 */
class MessageFileTypeGroup extends MessageFileType
{
    public const TYPE_NAME = 'messageFileTypeGroup';

    /**
     * Title of the group chat; may be empty if unrecognized
     *
     * @var string
     */
    protected string $title;

    public function __construct(string $title)
    {
        parent::__construct();

        $this->title = $title;
    }

    public static function fromArray(array $array): MessageFileTypeGroup
    {
        return new static(
            $array['title'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'title' => $this->title,
        ];
    }

    public function getTitle(): string
    {
        return $this->title;
    }
}
