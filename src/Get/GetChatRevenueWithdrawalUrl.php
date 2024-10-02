<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns a URL for chat revenue withdrawal; requires owner privileges in the chat. Currently, this method can be used only for channels if
 * supergroupFullInfo.can_get_revenue_statistics == true and getOption("can_withdraw_chat_revenue").
 */
class GetChatRevenueWithdrawalUrl extends TdFunction
{
    public const TYPE_NAME = 'getChatRevenueWithdrawalUrl';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int    $chatId,
        /**
         * The 2-step verification password of the current user.
         */
        protected string $password,
    ) {}

    public static function fromArray(array $array): GetChatRevenueWithdrawalUrl
    {
        return new static(
            $array['chat_id'],
            $array['password'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'chat_id'  => $this->chatId,
            'password' => $this->password,
        ];
    }
}
