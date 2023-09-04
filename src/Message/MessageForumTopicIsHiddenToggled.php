<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A General forum topic has been hidden or unhidden
 */
class MessageForumTopicIsHiddenToggled extends MessageContent
{
    public const TYPE_NAME = 'messageForumTopicIsHiddenToggled';

    /**
     * True, if the topic was hidden; otherwise, the topic was unhidden
     *
     * @var bool
     */
    protected bool $isHidden;

    public function __construct(bool $isHidden)
    {
        parent::__construct();

        $this->isHidden = $isHidden;
    }

    public static function fromArray(array $array): MessageForumTopicIsHiddenToggled
    {
        return new static(
            $array['is_hidden'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'is_hidden' => $this->isHidden,
        ];
    }

    public function getIsHidden(): bool
    {
        return $this->isHidden;
    }
}
