<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Target;

use Totaldev\TgSchema\Internal\InternalLinkType;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The chat needs to be open with the provided internal link.
 */
class TargetChatInternalLink extends TargetChat
{
    public const string TYPE_NAME = 'targetChatInternalLink';

    public function __construct(
        /**
         * An internal link pointing to the chat.
         */
        protected InternalLinkType $link
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): TargetChatInternalLink
    {
        return new static(
            link: TdSchemaRegistry::fromArray($array['link']),
        );
    }

    public function getLink(): InternalLinkType
    {
        return $this->link;
    }

    public function setLink(InternalLinkType $value): static
    {
        $this->link = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'link'  => $this->link->jsonSerialize(),
        ];
    }
}
