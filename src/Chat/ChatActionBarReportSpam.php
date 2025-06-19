<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

/**
 * The chat can be reported as spam using the method reportChat with an empty option_id and message_ids. If the chat is a private chat with a user with an
 * emoji status, then a notice about emoji status usage must be shown.
 */
class ChatActionBarReportSpam extends ChatActionBar
{
    public const TYPE_NAME = 'chatActionBarReportSpam';

    public function __construct(
        /**
         * If true, the chat was automatically archived and can be moved back to the main chat list using addChatToList simultaneously with setting chat notification settings to default using setChatNotificationSettings.
         */
        protected bool $canUnarchive
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatActionBarReportSpam
    {
        return new static(
            $array['can_unarchive'],
        );
    }

    public function getCanUnarchive(): bool
    {
        return $this->canUnarchive;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'can_unarchive' => $this->canUnarchive,
        ];
    }
}
