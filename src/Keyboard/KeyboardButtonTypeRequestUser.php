<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Keyboard;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A button that requests a user to be shared by the current user; available only in private chats. Use the method shareUserWithBot to complete the request
 */
class KeyboardButtonTypeRequestUser extends KeyboardButtonType
{
    public const TYPE_NAME = 'keyboardButtonTypeRequestUser';

    /**
     * Unique button identifier
     *
     * @var int
     */
    protected int $id;

    /**
     * True, if the shared user must or must not be a bot
     *
     * @var bool
     */
    protected bool $restrictUserIsBot;

    /**
     * True, if the shared user must or must not be a Telegram Premium user
     *
     * @var bool
     */
    protected bool $restrictUserIsPremium;

    /**
     * True, if the shared user must be a bot; otherwise, the shared user must no be a bot. Ignored if restrict_user_is_bot is false
     *
     * @var bool
     */
    protected bool $userIsBot;

    /**
     * True, if the shared user must be a Telegram Premium user; otherwise, the shared user must no be a Telegram Premium user. Ignored if
     * restrict_user_is_premium is false
     *
     * @var bool
     */
    protected bool $userIsPremium;

    public function __construct(
        int  $id,
        bool $restrictUserIsBot,
        bool $userIsBot,
        bool $restrictUserIsPremium,
        bool $userIsPremium,
    )
    {
        parent::__construct();

        $this->id = $id;
        $this->restrictUserIsBot = $restrictUserIsBot;
        $this->userIsBot = $userIsBot;
        $this->restrictUserIsPremium = $restrictUserIsPremium;
        $this->userIsPremium = $userIsPremium;
    }

    public static function fromArray(array $array): KeyboardButtonTypeRequestUser
    {
        return new static(
            $array['id'],
            $array['restrict_user_is_bot'],
            $array['user_is_bot'],
            $array['restrict_user_is_premium'],
            $array['user_is_premium'],
        );
    }

    public function getId(): int
    {
        return $this->id;
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
            '@type' => static::TYPE_NAME,
            'id' => $this->id,
            'restrict_user_is_bot' => $this->restrictUserIsBot,
            'user_is_bot' => $this->userIsBot,
            'restrict_user_is_premium' => $this->restrictUserIsPremium,
            'user_is_premium' => $this->userIsPremium,
        ];
    }
}
