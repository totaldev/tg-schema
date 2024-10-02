<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\Business\BusinessGreetingMessageSettings;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Changes the business greeting message settings of the current user. Requires Telegram Business subscription.
 */
class SetBusinessGreetingMessageSettings extends TdFunction
{
    public const TYPE_NAME = 'setBusinessGreetingMessageSettings';

    public function __construct(
        /**
         * The new settings for the greeting message of the business; pass null to disable the greeting message.
         */
        protected BusinessGreetingMessageSettings $greetingMessageSettings
    ) {}

    public static function fromArray(array $array): SetBusinessGreetingMessageSettings
    {
        return new static(
            TdSchemaRegistry::fromArray($array['greeting_message_settings']),
        );
    }

    public function getGreetingMessageSettings(): BusinessGreetingMessageSettings
    {
        return $this->greetingMessageSettings;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                     => static::TYPE_NAME,
            'greeting_message_settings' => $this->greetingMessageSettings->typeSerialize(),
        ];
    }
}
