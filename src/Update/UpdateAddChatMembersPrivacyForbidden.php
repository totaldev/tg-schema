<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Adding users to a chat has failed because of their privacy settings. An invite link can be shared with the users if appropriate
 */
class UpdateAddChatMembersPrivacyForbidden extends Update
{
    public const TYPE_NAME = 'updateAddChatMembersPrivacyForbidden';

    /**
     * Chat identifier
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Identifiers of users, which weren't added because of their privacy settings
     *
     * @var int[]
     */
    protected array $userIds;

    public function __construct(int $chatId, array $userIds)
    {
        parent::__construct();

        $this->chatId = $chatId;
        $this->userIds = $userIds;
    }

    public static function fromArray(array $array): UpdateAddChatMembersPrivacyForbidden
    {
        return new static(
            $array['chat_id'],
            $array['user_ids'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'user_ids' => $this->userIds,
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getUserIds(): array
    {
        return $this->userIds;
    }
}
