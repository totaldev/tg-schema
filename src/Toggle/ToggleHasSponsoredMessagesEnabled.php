<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Toggle;

use Totaldev\TgSchema\TdFunction;

/**
 * Toggles whether the current user has sponsored messages enabled. The setting has no effect for users without Telegram Premium for which sponsored messages
 * are always enabled.
 */
class ToggleHasSponsoredMessagesEnabled extends TdFunction
{
    public const TYPE_NAME = 'toggleHasSponsoredMessagesEnabled';

    public function __construct(
        /**
         * Pass true to enable sponsored messages for the current user; false to disable them.
         */
        protected bool $hasSponsoredMessagesEnabled
    ) {}

    public static function fromArray(array $array): ToggleHasSponsoredMessagesEnabled
    {
        return new static(
            $array['has_sponsored_messages_enabled'],
        );
    }

    public function getHasSponsoredMessagesEnabled(): bool
    {
        return $this->hasSponsoredMessagesEnabled;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                          => static::TYPE_NAME,
            'has_sponsored_messages_enabled' => $this->hasSponsoredMessagesEnabled,
        ];
    }
}
