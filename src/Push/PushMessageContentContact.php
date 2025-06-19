<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Push;

/**
 * A message with a user contact.
 */
class PushMessageContentContact extends PushMessageContent
{
    public const TYPE_NAME = 'pushMessageContentContact';

    public function __construct(
        /**
         * Contact's name.
         */
        protected string $name,
        /**
         * True, if the message is a pinned message with the specified content.
         */
        protected bool   $isPinned
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PushMessageContentContact
    {
        return new static(
            $array['name'],
            $array['is_pinned'],
        );
    }

    public function getIsPinned(): bool
    {
        return $this->isPinned;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'name'      => $this->name,
            'is_pinned' => $this->isPinned,
        ];
    }
}
