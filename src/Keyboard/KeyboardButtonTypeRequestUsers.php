<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Keyboard;

/**
 * A button that requests users to be shared by the current user; available only in private chats. Use the method shareUsersWithBot to complete the request.
 */
class KeyboardButtonTypeRequestUsers extends KeyboardButtonType
{
    public const TYPE_NAME = 'keyboardButtonTypeRequestUsers';

    public function __construct(
        /**
         * Unique button identifier.
         */
        protected int  $id,
        /**
         * True, if the shared users must or must not be bots.
         */
        protected bool $restrictUserIsBot,
        /**
         * True, if the shared users must be bots; otherwise, the shared users must not be bots. Ignored if restrict_user_is_bot is false.
         */
        protected bool $userIsBot,
        /**
         * True, if the shared users must or must not be Telegram Premium users.
         */
        protected bool $restrictUserIsPremium,
        /**
         * True, if the shared users must be Telegram Premium users; otherwise, the shared users must not be Telegram Premium users. Ignored if restrict_user_is_premium is false.
         */
        protected bool $userIsPremium,
        /**
         * The maximum number of users to share.
         */
        protected int  $maxQuantity,
        /**
         * Pass true to request name of the users; bots only.
         */
        protected bool $requestName,
        /**
         * Pass true to request username of the users; bots only.
         */
        protected bool $requestUsername,
        /**
         * Pass true to request photo of the users; bots only.
         */
        protected bool $requestPhoto,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): KeyboardButtonTypeRequestUsers
    {
        return new static(
            $array['id'],
            $array['restrict_user_is_bot'],
            $array['user_is_bot'],
            $array['restrict_user_is_premium'],
            $array['user_is_premium'],
            $array['max_quantity'],
            $array['request_name'],
            $array['request_username'],
            $array['request_photo'],
        );
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getMaxQuantity(): int
    {
        return $this->maxQuantity;
    }

    public function getRequestName(): bool
    {
        return $this->requestName;
    }

    public function getRequestPhoto(): bool
    {
        return $this->requestPhoto;
    }

    public function getRequestUsername(): bool
    {
        return $this->requestUsername;
    }

    public function getRestrictUserIsBot(): bool
    {
        return $this->restrictUserIsBot;
    }

    public function getRestrictUserIsPremium(): bool
    {
        return $this->restrictUserIsPremium;
    }

    public function getUserIsBot(): bool
    {
        return $this->userIsBot;
    }

    public function getUserIsPremium(): bool
    {
        return $this->userIsPremium;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                    => static::TYPE_NAME,
            'id'                       => $this->id,
            'restrict_user_is_bot'     => $this->restrictUserIsBot,
            'user_is_bot'              => $this->userIsBot,
            'restrict_user_is_premium' => $this->restrictUserIsPremium,
            'user_is_premium'          => $this->userIsPremium,
            'max_quantity'             => $this->maxQuantity,
            'request_name'             => $this->requestName,
            'request_username'         => $this->requestUsername,
            'request_photo'            => $this->requestPhoto,
        ];
    }
}
