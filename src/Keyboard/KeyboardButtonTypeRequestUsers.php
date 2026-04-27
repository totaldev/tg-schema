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
    public const string TYPE_NAME = 'keyboardButtonTypeRequestUsers';

    public function __construct(
        /**
         * Unique button identifier.
         */
        protected int  $id,
        /**
         * The maximum number of users to share.
         */
        protected int  $maxQuantity,
        /**
         * Pass true to request name of the users; bots only.
         */
        protected bool $requestName,
        /**
         * Pass true to request photo of the users; bots only.
         */
        protected bool $requestPhoto,
        /**
         * Pass true to request username of the users; bots only.
         */
        protected bool $requestUsername,
        /**
         * True, if the shared users must or must not be bots.
         */
        protected bool $restrictUserIsBot,
        /**
         * True, if the shared users must or must not be Telegram Premium users.
         */
        protected bool $restrictUserIsPremium,
        /**
         * True, if the shared users must be bots; otherwise, the shared users must not be bots. Ignored if restrict_user_is_bot is false.
         */
        protected bool $userIsBot,
        /**
         * True, if the shared users must be Telegram Premium users; otherwise, the shared users must not be Telegram Premium users. Ignored if restrict_user_is_premium is false.
         */
        protected bool $userIsPremium,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): KeyboardButtonTypeRequestUsers
    {
        return new static(
            id                   : $array['id'],
            maxQuantity          : $array['max_quantity'],
            requestName          : $array['request_name'],
            requestPhoto         : $array['request_photo'],
            requestUsername      : $array['request_username'],
            restrictUserIsBot    : $array['restrict_user_is_bot'],
            restrictUserIsPremium: $array['restrict_user_is_premium'],
            userIsBot            : $array['user_is_bot'],
            userIsPremium        : $array['user_is_premium'],
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

    public function setId(int $value): static
    {
        $this->id = $value;

        return $this;
    }

    public function setMaxQuantity(int $value): static
    {
        $this->maxQuantity = $value;

        return $this;
    }

    public function setRequestName(bool $value): static
    {
        $this->requestName = $value;

        return $this;
    }

    public function setRequestPhoto(bool $value): static
    {
        $this->requestPhoto = $value;

        return $this;
    }

    public function setRequestUsername(bool $value): static
    {
        $this->requestUsername = $value;

        return $this;
    }

    public function setRestrictUserIsBot(bool $value): static
    {
        $this->restrictUserIsBot = $value;

        return $this;
    }

    public function setRestrictUserIsPremium(bool $value): static
    {
        $this->restrictUserIsPremium = $value;

        return $this;
    }

    public function setUserIsBot(bool $value): static
    {
        $this->userIsBot = $value;

        return $this;
    }

    public function setUserIsPremium(bool $value): static
    {
        $this->userIsPremium = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                    => static::TYPE_NAME,
            'id'                       => $this->id,
            'max_quantity'             => $this->maxQuantity,
            'request_name'             => $this->requestName,
            'request_photo'            => $this->requestPhoto,
            'request_username'         => $this->requestUsername,
            'restrict_user_is_bot'     => $this->restrictUserIsBot,
            'restrict_user_is_premium' => $this->restrictUserIsPremium,
            'user_is_bot'              => $this->userIsBot,
            'user_is_premium'          => $this->userIsPremium,
        ];
    }
}
