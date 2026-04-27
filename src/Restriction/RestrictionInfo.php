<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Restriction;

use Totaldev\TgSchema\TdObject;

/**
 * Contains information about restrictions that must be applied to a chat or a message.
 */
class RestrictionInfo extends TdObject
{
    public const string TYPE_NAME = 'restrictionInfo';

    public function __construct(
        /**
         * True, if media content of the messages must be hidden with 18+ spoiler. Use value of the option "can_ignore_sensitive_content_restrictions" to check whether the current user can ignore the restriction. If age verification parameters were received in updateAgeVerificationParameters, then the user must complete age verification to ignore the restriction. Set the option "ignore_sensitive_content_restrictions" to true if the user passes age verification.
         */
        protected bool   $hasSensitiveContent,
        /**
         * A human-readable description of the reason why access to the content must be restricted. If empty, then the content can be accessed, but may be covered by hidden with 18+ spoiler anyway.
         */
        protected string $restrictionReason,
    ) {}

    public static function fromArray(array $array): RestrictionInfo
    {
        return new static(
            hasSensitiveContent: $array['has_sensitive_content'],
            restrictionReason  : $array['restriction_reason'],
        );
    }

    public function getHasSensitiveContent(): bool
    {
        return $this->hasSensitiveContent;
    }

    public function getRestrictionReason(): string
    {
        return $this->restrictionReason;
    }

    public function setHasSensitiveContent(bool $value): static
    {
        $this->hasSensitiveContent = $value;

        return $this;
    }

    public function setRestrictionReason(string $value): static
    {
        $this->restrictionReason = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'has_sensitive_content' => $this->hasSensitiveContent,
            'restriction_reason'    => $this->restrictionReason,
        ];
    }
}
