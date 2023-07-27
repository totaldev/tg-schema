<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Target;

/**
 * The chat needs to be open with the provided internal link
 */
class TargetChatInternalLink extends TargetChat
{
    public const TYPE_NAME = 'targetChatInternalLink';

    /**
     * An internal link pointing to the chat
     *
     * @var InternalLinkType
     */
    protected InternalLinkType $link;

    public function __construct(InternalLinkType $link)
    {
        parent::__construct();

        $this->link = $link;
    }

    public static function fromArray(array $array): TargetChatInternalLink
    {
        return new static(
            TdSchemaRegistry::fromArray($array['link']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'link' => $this->link->typeSerialize(),
        ];
    }

    public function getLink(): InternalLinkType
    {
        return $this->link;
    }
}
