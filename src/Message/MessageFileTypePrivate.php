<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

/**
 * The messages were exported from a private chat.
 */
class MessageFileTypePrivate extends MessageFileType
{
    public const TYPE_NAME = 'messageFileTypePrivate';

    public function __construct(
        /**
         * Name of the other party; may be empty if unrecognized.
         */
        protected string $name
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageFileTypePrivate
    {
        return new static(
            $array['name'],
        );
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'name'  => $this->name,
        ];
    }
}
