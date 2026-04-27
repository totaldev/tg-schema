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
    public const string TYPE_NAME = 'pushMessageContentContact';

    public function __construct(
        /**
         * True, if the message is a pinned message with the specified content.
         */
        protected bool   $isPinned,
        /**
         * Contact's name.
         */
        protected string $name,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PushMessageContentContact
    {
        return new static(
            isPinned: $array['is_pinned'],
            name    : $array['name'],
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

    public function setIsPinned(bool $value): static
    {
        $this->isPinned = $value;

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
            '@type'     => static::TYPE_NAME,
            'is_pinned' => $this->isPinned,
            'name'      => $this->name,
        ];
    }
}
