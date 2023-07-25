<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema;

/**
 * The chat is a private or secret chat, which can be reported using the method reportChat, or the other user can be blocked using the method toggleMessageSenderIsBlocked, or the other user can be added to the contact list using the method addContact. If the chat is a private chat with a user with an emoji status, then a notice about emoji status usage must be shown
 */
class ChatActionBarReportAddBlock extends ChatActionBar
{
    public const TYPE_NAME = 'chatActionBarReportAddBlock';

    /**
     * If true, the chat was automatically archived and can be moved back to the main chat list using addChatToList simultaneously with setting chat notification settings to default using setChatNotificationSettings
     *
     * @var bool
     */
    protected bool $canUnarchive;

    /**
     * If non-negative, the current user was found by the peer through searchChatsNearby and this is the distance between the users
     *
     * @var int
     */
    protected int $distance;

    public function __construct(bool $canUnarchive, int $distance)
    {
        parent::__construct();

        $this->canUnarchive = $canUnarchive;
        $this->distance = $distance;
    }

    public static function fromArray(array $array): ChatActionBarReportAddBlock
    {
        return new static(
            $array['can_unarchive'],
            $array['distance'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'can_unarchive' => $this->canUnarchive,
            'distance' => $this->distance,
        ];
    }

    public function getCanUnarchive(): bool
    {
        return $this->canUnarchive;
    }

    public function getDistance(): int
    {
        return $this->distance;
    }
}
