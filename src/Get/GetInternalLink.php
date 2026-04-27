<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\Internal\InternalLinkType;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns an HTTPS or a tg: link with the given type. Can be called before authorization.
 */
class GetInternalLink extends TdFunction
{
    public const string TYPE_NAME = 'getInternalLink';

    public function __construct(
        /**
         * Pass true to create an HTTPS link (only available for some link types); pass false to create a tg: link.
         */
        protected bool             $isHttp,
        /**
         * Expected type of the link.
         */
        protected InternalLinkType $type,
    ) {}

    public static function fromArray(array $array): GetInternalLink
    {
        return new static(
            isHttp: $array['is_http'],
            type  : TdSchemaRegistry::fromArray($array['type']),
        );
    }

    public function getIsHttp(): bool
    {
        return $this->isHttp;
    }

    public function getType(): InternalLinkType
    {
        return $this->type;
    }

    public function setIsHttp(bool $value): static
    {
        $this->isHttp = $value;

        return $this;
    }

    public function setType(InternalLinkType $value): static
    {
        $this->type = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'is_http' => $this->isHttp,
            'type'    => $this->type->jsonSerialize(),
        ];
    }
}
