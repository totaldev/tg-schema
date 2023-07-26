<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace TotaldevTgSchema;

/**
 * Describes a message
 */
class Message extends TdObject
{
    public const TYPE_NAME = 'message';

    /**
     * Message identifier; unique for the chat to which the message belongs
     *
     * @var int
     */
    protected int $id;

    /**
     * Identifier of the sender of the message
     *
     * @var MessageSender
     */
    protected MessageSender $senderId;

    /**
     * Chat identifier
     *
     * @var int
     */
    protected int $chatId;

    /**
     * The sending state of the message; may be null
     *
     * @var MessageSendingState|null
     */
    protected ?MessageSendingState $sendingState;

    /**
     * The scheduling state of the message; may be null
     *
     * @var MessageSchedulingState|null
     */
    protected ?MessageSchedulingState $schedulingState;

    /**
     * True, if the message is outgoing
     *
     * @var bool
     */
    protected bool $isOutgoing;

    /**
     * True, if the message is pinned
     *
     * @var bool
     */
    protected bool $isPinned;

    /**
     * True, if the message can be edited. For live location and poll messages this fields shows whether editMessageLiveLocation or stopPoll can be used with this message by the application
     *
     * @var bool
     */
    protected bool $canBeEdited;

    /**
     * True, if the message can be forwarded
     *
     * @var bool
     */
    protected bool $canBeForwarded;

    /**
     * True, if content of the message can be saved locally or copied
     *
     * @var bool
     */
    protected bool $canBeSaved;

    /**
     * True, if the message can be deleted only for the current user while other users will continue to see it
     *
     * @var bool
     */
    protected bool $canBeDeletedOnlyForSelf;

    /**
     * True, if the message can be deleted for all users
     *
     * @var bool
     */
    protected bool $canBeDeletedForAllUsers;

    /**
     * True, if the list of added reactions is available through getMessageAddedReactions
     *
     * @var bool
     */
    protected bool $canGetAddedReactions;

    /**
     * True, if the message statistics are available through getMessageStatistics
     *
     * @var bool
     */
    protected bool $canGetStatistics;

    /**
     * True, if information about the message thread is available through getMessageThread and getMessageThreadHistory
     *
     * @var bool
     */
    protected bool $canGetMessageThread;

    /**
     * True, if chat members already viewed the message can be received through getMessageViewers
     *
     * @var bool
     */
    protected bool $canGetViewers;

    /**
     * True, if media timestamp links can be generated for media timestamp entities in the message text, caption or web page description through getMessageLink
     *
     * @var bool
     */
    protected bool $canGetMediaTimestampLinks;

    /**
     * True, if reactions on the message can be reported through reportMessageReactions
     *
     * @var bool
     */
    protected bool $canReportReactions;

    /**
     * True, if media timestamp entities refers to a media in this message as opposed to a media in the replied message
     *
     * @var bool
     */
    protected bool $hasTimestampedMedia;

    /**
     * True, if the message is a channel post. All messages to channels are channel posts, all other messages are not channel posts
     *
     * @var bool
     */
    protected bool $isChannelPost;

    /**
     * True, if the message is a forum topic message
     *
     * @var bool
     */
    protected bool $isTopicMessage;

    /**
     * True, if the message contains an unread mention for the current user
     *
     * @var bool
     */
    protected bool $containsUnreadMention;

    /**
     * Point in time (Unix timestamp) when the message was sent
     *
     * @var int
     */
    protected int $date;

    /**
     * Point in time (Unix timestamp) when the message was last edited
     *
     * @var int
     */
    protected int $editDate;

    /**
     * Information about the initial message sender; may be null
     *
     * @var MessageForwardInfo|null
     */
    protected ?MessageForwardInfo $forwardInfo;

    /**
     * Information about interactions with the message; may be null
     *
     * @var MessageInteractionInfo|null
     */
    protected ?MessageInteractionInfo $interactionInfo;

    /**
     * Information about unread reactions added to the message
     *
     * @var UnreadReaction[]
     */
    protected array $unreadReactions;

    /**
     * Information about the message or the story this message is replying to; may be null if none
     *
     * @var MessageReplyTo|null
     */
    protected ?MessageReplyTo $replyTo;

    /**
     * If non-zero, the identifier of the message thread the message belongs to; unique within the chat to which the message belongs
     *
     * @var int
     */
    protected int $messageThreadId;

    /**
     * The message's self-destruct time, in seconds; 0 if none. TDLib will send updateDeleteMessages or updateMessageContent once the time expires
     *
     * @var int
     */
    protected int $selfDestructTime;

    /**
     * Time left before the message self-destruct timer expires, in seconds. If the self-destruct timer isn't started yet, equals to the value of the self_destruct_time field
     *
     * @var float
     */
    protected float $selfDestructIn;

    /**
     * Time left before the message will be automatically deleted by message_auto_delete_time setting of the chat, in seconds; 0 if never. TDLib will send updateDeleteMessages or updateMessageContent once the time expires
     *
     * @var float
     */
    protected float $autoDeleteIn;

    /**
     * If non-zero, the user identifier of the bot through which this message was sent
     *
     * @var int
     */
    protected int $viaBotUserId;

    /**
     * For channel posts and anonymous group messages, optional author signature
     *
     * @var string
     */
    protected string $authorSignature;

    /**
     * Unique identifier of an album this message belongs to. Only audios, documents, photos and videos can be grouped together in albums
     *
     * @var int
     */
    protected int $mediaAlbumId;

    /**
     * If non-empty, contains a human-readable description of the reason why access to this message must be restricted
     *
     * @var string
     */
    protected string $restrictionReason;

    /**
     * Content of the message
     *
     * @var MessageContent
     */
    protected MessageContent $content;

    /**
     * Reply markup for the message; may be null
     *
     * @var ReplyMarkup|null
     */
    protected ?ReplyMarkup $replyMarkup;

    public function __construct(
        int $id,
        MessageSender $senderId,
        int $chatId,
        ?MessageSendingState $sendingState,
        ?MessageSchedulingState $schedulingState,
        bool $isOutgoing,
        bool $isPinned,
        bool $canBeEdited,
        bool $canBeForwarded,
        bool $canBeSaved,
        bool $canBeDeletedOnlyForSelf,
        bool $canBeDeletedForAllUsers,
        bool $canGetAddedReactions,
        bool $canGetStatistics,
        bool $canGetMessageThread,
        bool $canGetViewers,
        bool $canGetMediaTimestampLinks,
        bool $canReportReactions,
        bool $hasTimestampedMedia,
        bool $isChannelPost,
        bool $isTopicMessage,
        bool $containsUnreadMention,
        int $date,
        int $editDate,
        ?MessageForwardInfo $forwardInfo,
        ?MessageInteractionInfo $interactionInfo,
        array $unreadReactions,
        ?MessageReplyTo $replyTo,
        int $messageThreadId,
        int $selfDestructTime,
        float $selfDestructIn,
        float $autoDeleteIn,
        int $viaBotUserId,
        string $authorSignature,
        int $mediaAlbumId,
        string $restrictionReason,
        MessageContent $content,
        ?ReplyMarkup $replyMarkup
    ) {
        $this->id = $id;
        $this->senderId = $senderId;
        $this->chatId = $chatId;
        $this->sendingState = $sendingState;
        $this->schedulingState = $schedulingState;
        $this->isOutgoing = $isOutgoing;
        $this->isPinned = $isPinned;
        $this->canBeEdited = $canBeEdited;
        $this->canBeForwarded = $canBeForwarded;
        $this->canBeSaved = $canBeSaved;
        $this->canBeDeletedOnlyForSelf = $canBeDeletedOnlyForSelf;
        $this->canBeDeletedForAllUsers = $canBeDeletedForAllUsers;
        $this->canGetAddedReactions = $canGetAddedReactions;
        $this->canGetStatistics = $canGetStatistics;
        $this->canGetMessageThread = $canGetMessageThread;
        $this->canGetViewers = $canGetViewers;
        $this->canGetMediaTimestampLinks = $canGetMediaTimestampLinks;
        $this->canReportReactions = $canReportReactions;
        $this->hasTimestampedMedia = $hasTimestampedMedia;
        $this->isChannelPost = $isChannelPost;
        $this->isTopicMessage = $isTopicMessage;
        $this->containsUnreadMention = $containsUnreadMention;
        $this->date = $date;
        $this->editDate = $editDate;
        $this->forwardInfo = $forwardInfo;
        $this->interactionInfo = $interactionInfo;
        $this->unreadReactions = $unreadReactions;
        $this->replyTo = $replyTo;
        $this->messageThreadId = $messageThreadId;
        $this->selfDestructTime = $selfDestructTime;
        $this->selfDestructIn = $selfDestructIn;
        $this->autoDeleteIn = $autoDeleteIn;
        $this->viaBotUserId = $viaBotUserId;
        $this->authorSignature = $authorSignature;
        $this->mediaAlbumId = $mediaAlbumId;
        $this->restrictionReason = $restrictionReason;
        $this->content = $content;
        $this->replyMarkup = $replyMarkup;
    }

    public static function fromArray(array $array): Message
    {
        return new static(
            $array['id'],
            TdSchemaRegistry::fromArray($array['sender_id']),
            $array['chat_id'],
            (isset($array['sending_state']) ? TdSchemaRegistry::fromArray($array['sending_state']) : null),
            (isset($array['scheduling_state']) ? TdSchemaRegistry::fromArray($array['scheduling_state']) : null),
            $array['is_outgoing'],
            $array['is_pinned'],
            $array['can_be_edited'],
            $array['can_be_forwarded'],
            $array['can_be_saved'],
            $array['can_be_deleted_only_for_self'],
            $array['can_be_deleted_for_all_users'],
            $array['can_get_added_reactions'],
            $array['can_get_statistics'],
            $array['can_get_message_thread'],
            $array['can_get_viewers'],
            $array['can_get_media_timestamp_links'],
            $array['can_report_reactions'],
            $array['has_timestamped_media'],
            $array['is_channel_post'],
            $array['is_topic_message'],
            $array['contains_unread_mention'],
            $array['date'],
            $array['edit_date'],
            (isset($array['forward_info']) ? TdSchemaRegistry::fromArray($array['forward_info']) : null),
            (isset($array['interaction_info']) ? TdSchemaRegistry::fromArray($array['interaction_info']) : null),
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['unreadReactions']),
            (isset($array['reply_to']) ? TdSchemaRegistry::fromArray($array['reply_to']) : null),
            $array['message_thread_id'],
            $array['self_destruct_time'],
            $array['self_destruct_in'],
            $array['auto_delete_in'],
            $array['via_bot_user_id'],
            $array['author_signature'],
            $array['media_album_id'],
            $array['restriction_reason'],
            TdSchemaRegistry::fromArray($array['content']),
            (isset($array['reply_markup']) ? TdSchemaRegistry::fromArray($array['reply_markup']) : null),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'id' => $this->id,
            'sender_id' => $this->senderId->typeSerialize(),
            'chat_id' => $this->chatId,
            'sending_state' => (isset($this->sendingState) ? $this->sendingState : null),
            'scheduling_state' => (isset($this->schedulingState) ? $this->schedulingState : null),
            'is_outgoing' => $this->isOutgoing,
            'is_pinned' => $this->isPinned,
            'can_be_edited' => $this->canBeEdited,
            'can_be_forwarded' => $this->canBeForwarded,
            'can_be_saved' => $this->canBeSaved,
            'can_be_deleted_only_for_self' => $this->canBeDeletedOnlyForSelf,
            'can_be_deleted_for_all_users' => $this->canBeDeletedForAllUsers,
            'can_get_added_reactions' => $this->canGetAddedReactions,
            'can_get_statistics' => $this->canGetStatistics,
            'can_get_message_thread' => $this->canGetMessageThread,
            'can_get_viewers' => $this->canGetViewers,
            'can_get_media_timestamp_links' => $this->canGetMediaTimestampLinks,
            'can_report_reactions' => $this->canReportReactions,
            'has_timestamped_media' => $this->hasTimestampedMedia,
            'is_channel_post' => $this->isChannelPost,
            'is_topic_message' => $this->isTopicMessage,
            'contains_unread_mention' => $this->containsUnreadMention,
            'date' => $this->date,
            'edit_date' => $this->editDate,
            'forward_info' => (isset($this->forwardInfo) ? $this->forwardInfo : null),
            'interaction_info' => (isset($this->interactionInfo) ? $this->interactionInfo : null),
            array_map(fn($x) => $x->typeSerialize(), $this->unreadReactions),
            'reply_to' => (isset($this->replyTo) ? $this->replyTo : null),
            'message_thread_id' => $this->messageThreadId,
            'self_destruct_time' => $this->selfDestructTime,
            'self_destruct_in' => $this->selfDestructIn,
            'auto_delete_in' => $this->autoDeleteIn,
            'via_bot_user_id' => $this->viaBotUserId,
            'author_signature' => $this->authorSignature,
            'media_album_id' => $this->mediaAlbumId,
            'restriction_reason' => $this->restrictionReason,
            'content' => $this->content->typeSerialize(),
            'reply_markup' => (isset($this->replyMarkup) ? $this->replyMarkup : null),
        ];
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getSenderId(): MessageSender
    {
        return $this->senderId;
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getSendingState(): ?MessageSendingState
    {
        return $this->sendingState;
    }

    public function getSchedulingState(): ?MessageSchedulingState
    {
        return $this->schedulingState;
    }

    public function getIsOutgoing(): bool
    {
        return $this->isOutgoing;
    }

    public function getIsPinned(): bool
    {
        return $this->isPinned;
    }

    public function getCanBeEdited(): bool
    {
        return $this->canBeEdited;
    }

    public function getCanBeForwarded(): bool
    {
        return $this->canBeForwarded;
    }

    public function getCanBeSaved(): bool
    {
        return $this->canBeSaved;
    }

    public function getCanBeDeletedOnlyForSelf(): bool
    {
        return $this->canBeDeletedOnlyForSelf;
    }

    public function getCanBeDeletedForAllUsers(): bool
    {
        return $this->canBeDeletedForAllUsers;
    }

    public function getCanGetAddedReactions(): bool
    {
        return $this->canGetAddedReactions;
    }

    public function getCanGetStatistics(): bool
    {
        return $this->canGetStatistics;
    }

    public function getCanGetMessageThread(): bool
    {
        return $this->canGetMessageThread;
    }

    public function getCanGetViewers(): bool
    {
        return $this->canGetViewers;
    }

    public function getCanGetMediaTimestampLinks(): bool
    {
        return $this->canGetMediaTimestampLinks;
    }

    public function getCanReportReactions(): bool
    {
        return $this->canReportReactions;
    }

    public function getHasTimestampedMedia(): bool
    {
        return $this->hasTimestampedMedia;
    }

    public function getIsChannelPost(): bool
    {
        return $this->isChannelPost;
    }

    public function getIsTopicMessage(): bool
    {
        return $this->isTopicMessage;
    }

    public function getContainsUnreadMention(): bool
    {
        return $this->containsUnreadMention;
    }

    public function getDate(): int
    {
        return $this->date;
    }

    public function getEditDate(): int
    {
        return $this->editDate;
    }

    public function getForwardInfo(): ?MessageForwardInfo
    {
        return $this->forwardInfo;
    }

    public function getInteractionInfo(): ?MessageInteractionInfo
    {
        return $this->interactionInfo;
    }

    public function getUnreadReactions(): array
    {
        return $this->unreadReactions;
    }

    public function getReplyTo(): ?MessageReplyTo
    {
        return $this->replyTo;
    }

    public function getMessageThreadId(): int
    {
        return $this->messageThreadId;
    }

    public function getSelfDestructTime(): int
    {
        return $this->selfDestructTime;
    }

    public function getSelfDestructIn(): float
    {
        return $this->selfDestructIn;
    }

    public function getAutoDeleteIn(): float
    {
        return $this->autoDeleteIn;
    }

    public function getViaBotUserId(): int
    {
        return $this->viaBotUserId;
    }

    public function getAuthorSignature(): string
    {
        return $this->authorSignature;
    }

    public function getMediaAlbumId(): int
    {
        return $this->mediaAlbumId;
    }

    public function getRestrictionReason(): string
    {
        return $this->restrictionReason;
    }

    public function getContent(): MessageContent
    {
        return $this->content;
    }

    public function getReplyMarkup(): ?ReplyMarkup
    {
        return $this->replyMarkup;
    }
}
