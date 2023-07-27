<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The chat can be reported as spam using the method reportChat with the reason reportReasonSpam. If the chat is a private chat with a user with an emoji status, then a notice about emoji status usage must be shown
 */
class ChatActionBarReportSpam extends ChatActionBar
{
    public const TYPE_NAME = 'chatActionBarReportSpam';

    /**
     * If true, the chat was automatically archived and can be moved back to the main chat list using addChatToList simultaneously with setting chat notification settings to default using setChatNotificationSettings
     *
     * @var bool
     */
    protected bool $canUnarchive;

    public function __construct(bool $canUnarchive)
    {
        parent::__construct();

        $this->canUnarchive = $canUnarchive;
    }

    public static function fromArray(array $array): ChatActionBarReportSpam
    {
        return new static(
            $array['can_unarchive'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'can_unarchive' => $this->canUnarchive,
        ];
    }

    public function getCanUnarchive(): bool
    {
        return $this->canUnarchive;
    }
}
