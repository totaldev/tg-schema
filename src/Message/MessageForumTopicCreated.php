<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\Forum\ForumTopicIcon;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A forum topic has been created.
 */
class MessageForumTopicCreated extends MessageContent
{
    public const TYPE_NAME = 'messageForumTopicCreated';

    public function __construct(
        /**
         * Name of the topic.
         */
        protected string         $name,
        /**
         * Icon of the topic.
         */
        protected ForumTopicIcon $icon
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageForumTopicCreated
    {
        return new static(
            $array['name'],
            TdSchemaRegistry::fromArray($array['icon']),
        );
    }

    public function getIcon(): ForumTopicIcon
    {
        return $this->icon;
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
            'icon'  => $this->icon->typeSerialize(),
        ];
    }
}
