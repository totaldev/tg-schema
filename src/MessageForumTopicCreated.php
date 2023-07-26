<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace TotaldevTgSchema;

/**
 * A forum topic has been created
 */
class MessageForumTopicCreated extends MessageContent
{
    public const TYPE_NAME = 'messageForumTopicCreated';

    /**
     * Name of the topic
     *
     * @var string
     */
    protected string $name;

    /**
     * Icon of the topic
     *
     * @var ForumTopicIcon
     */
    protected ForumTopicIcon $icon;

    public function __construct(string $name, ForumTopicIcon $icon)
    {
        parent::__construct();

        $this->name = $name;
        $this->icon = $icon;
    }

    public static function fromArray(array $array): MessageForumTopicCreated
    {
        return new static(
            $array['name'],
            TdSchemaRegistry::fromArray($array['icon']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'name' => $this->name,
            'icon' => $this->icon->typeSerialize(),
        ];
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getIcon(): ForumTopicIcon
    {
        return $this->icon;
    }
}
