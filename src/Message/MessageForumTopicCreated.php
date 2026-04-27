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
    public const string TYPE_NAME = 'messageForumTopicCreated';

    public function __construct(
        /**
         * Icon of the topic.
         */
        protected ForumTopicIcon $icon,
        /**
         * True, if the name of the topic wasn't added explicitly.
         */
        protected bool           $isNameImplicit,
        /**
         * Name of the topic.
         */
        protected string         $name,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageForumTopicCreated
    {
        return new static(
            icon          : TdSchemaRegistry::fromArray($array['icon']),
            isNameImplicit: $array['is_name_implicit'],
            name          : $array['name'],
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

    public function setIcon(ForumTopicIcon $value): static
    {
        $this->icon = $value;

        return $this;
    }

    public function setIsNameImplicit(bool $value): static
    {
        $this->isNameImplicit = $value;

        return $this;
    }

    public function setName(string $value): static
    {
        $this->name = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'icon'             => $this->icon->jsonSerialize(),
            'is_name_implicit' => $this->isNameImplicit,
            'name'             => $this->name,
        ];
    }
}
