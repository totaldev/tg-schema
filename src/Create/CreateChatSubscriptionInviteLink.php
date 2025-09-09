<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Create;

use Totaldev\TgSchema\Star\StarSubscriptionPricing;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Creates a new subscription invite link for a channel chat. Requires can_invite_users right in the chat.
 */
class CreateChatSubscriptionInviteLink extends TdFunction
{
    public const TYPE_NAME = 'createChatSubscriptionInviteLink';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int                     $chatId,
        /**
         * Invite link name; 0-32 characters.
         */
        protected string                  $name,
        /**
         * Information about subscription plan that will be applied to the users joining the chat via the link. Subscription period must be 2592000 in production environment, and 60 or 300 if Telegram test environment is used.
         */
        protected StarSubscriptionPricing $subscriptionPricing,
    ) {}

    public static function fromArray(array $array): CreateChatSubscriptionInviteLink
    {
        return new static(
            $array['chat_id'],
            $array['name'],
            TdSchemaRegistry::fromArray($array['subscription_pricing']),
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSubscriptionPricing(): StarSubscriptionPricing
    {
        return $this->subscriptionPricing;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'chat_id'              => $this->chatId,
            'name'                 => $this->name,
            'subscription_pricing' => $this->subscriptionPricing->typeSerialize(),
        ];
    }
}
