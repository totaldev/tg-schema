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
         * True, if the name of the topic wasn't added explicitly.
         */
        protected bool           $isNameImplicit,
        /**
         * Icon of the topic.
         */
        protected ForumTopicIcon $icon,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageForumTopicCreated
    {
        return new static(
            $array['name'],
            $array['is_name_implicit'],
            TdSchemaRegistry::fromArray($array['icon']),
        );
    }

    public function getIcon(): ForumTopicIcon
    {
        return $this->icon;
    }

    public function getIsNameImplicit(): bool
    {
        return $this->isNameImplicit;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'name'             => $this->name,
            'is_name_implicit' => $this->isNameImplicit,
            'icon'             => $this->icon->typeSerialize(),
        ];
    }
}
