<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Push;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A message with a user contact
 */
class PushMessageContentContact extends PushMessageContent
{
    public const TYPE_NAME = 'pushMessageContentContact';

    /**
     * True, if the message is a pinned message with the specified content
     *
     * @var bool
     */
    protected bool $isPinned;

    /**
     * Contact's name
     *
     * @var string
     */
    protected string $name;

    public function __construct(string $name, bool $isPinned)
    {
        parent::__construct();

        $this->name = $name;
        $this->isPinned = $isPinned;
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
            '@type' => static::TYPE_NAME,
            'name' => $this->name,
            'is_pinned' => $this->isPinned,
        ];
    }
}
