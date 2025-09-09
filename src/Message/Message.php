<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\Fact\FactCheck;
use Totaldev\TgSchema\Reply\ReplyMarkup;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Unread\UnreadReaction;

/**
 * Describes a message.
 */
class Message extends TdObject
{
    public const TYPE_NAME = 'message';

    public function __construct(
        /**
         * Message identifier; unique for the chat to which the message belongs.
         */
        protected int                      $id,
        /**
         * Identifier of the sender of the message.
         */
        protected MessageSender            $senderId,
        /**
         * Chat identifier.
         */
        protected int                      $chatId,
        /**
         * The sending state of the message; may be null if the message isn't being sent and didn't fail to be sent.
         */
        protected ?MessageSendingState     $sendingState,
        /**
         * The scheduling state of the message; may be null if the message isn't scheduled.
         */
        protected ?MessageSchedulingState  $schedulingState,
        /**
         * True, if the message is outgoing.
         */
        protected bool                     $isOutgoing,
        /**
         * True, if the message is pinned.
         */
        protected bool                     $isPinned,
        /**
         * True, if the message was sent because of a scheduled action by the message sender, for example, as away, or greeting service message.
         */
        protected bool                     $isFromOffline,
        /**
         * True, if content of the message can be saved locally.
         */
        protected bool                     $canBeSaved,
        /**
         * True, if media timestamp entities refers to a media in this message as opposed to a media in the replied message.
         */
        protected bool                     $hasTimestampedMedia,
        /**
         * True, if the message is a channel post. All messages to channels are channel posts, all other messages are not channel posts.
         */
        protected bool                     $isChannelPost,
        /**
         * True, if the message contains an unread mention for the current user.
         */
        protected bool                     $containsUnreadMention,
        /**
         * Point in time (Unix timestamp) when the message was sent; 0 for scheduled messages.
         */
        protected int                      $date,
        /**
         * Point in time (Unix timestamp) when the message was last edited; 0 for scheduled messages.
         */
        protected int                      $editDate,
        /**
         * Information about the initial message sender; may be null if none or unknown.
         */
        protected ?MessageForwardInfo      $forwardInfo,
        /**
         * Information about the initial message for messages created with importMessages; may be null if the message isn't imported.
         */
        protected ?MessageImportInfo       $importInfo,
        /**
         * Information about interactions with the message; may be null if none.
         */
        protected ?MessageInteractionInfo  $interactionInfo,
        /**
         * Information about unread reactions added to the message.
         *
         * @var UnreadReaction[]
         */
        protected array                    $unreadReactions,
        /**
         * Information about fact-check added to the message; may be null if none.
         */
        protected ?FactCheck               $factCheck,
        /**
         * Information about the message or the story this message is replying to; may be null if none.
         */
        protected ?MessageReplyTo          $replyTo,
        /**
         * If non-zero, the identifier of the message thread the message belongs to; unique within the chat to which the message belongs.
         */
        protected int                      $messageThreadId,
        /**
         * Identifier of the topic within the chat to which the message belongs; may be null if none.
         */
        protected ?MessageTopic            $topicId,
        /**
         * The message's self-destruct type; may be null if none.
         */
        protected ?MessageSelfDestructType $selfDestructType,
        /**
         * Time left before the message self-destruct timer expires, in seconds; 0 if self-destruction isn't scheduled yet.
         */
        protected float                    $selfDestructIn,
        /**
         * Time left before the message will be automatically deleted by message_auto_delete_time setting of the chat, in seconds; 0 if never.
         */
        protected float                    $autoDeleteIn,
        /**
         * If non-zero, the user identifier of the inline bot through which this message was sent.
         */
        protected int                      $viaBotUserId,
        /**
         * If non-zero, the user identifier of the business bot that sent this message.
         */
        protected int                      $senderBusinessBotUserId,
        /**
         * Number of times the sender of the message boosted the supergroup at the time the message was sent; 0 if none or unknown. For messages sent by the current user, supergroupFullInfo.my_boost_count must be used instead.
         */
        protected int                      $senderBoostCount,
        /**
         * The number of Telegram Stars the sender paid to send the message.
         */
        protected int                      $paidMessageStarCount,
        /**
         * For channel posts and anonymous group messages, optional author signature.
         */
        protected string                   $authorSignature,
        /**
         * Unique identifier of an album this message belongs to; 0 if none. Only audios, documents, photos and videos can be grouped together in albums.
         */
        protected int                      $mediaAlbumId,
        /**
         * Unique identifier of the effect added to the message; 0 if none.
         */
        protected int                      $effectId,
        /**
         * True, if media content of the message must be hidden with 18+ spoiler.
         */
        protected bool                     $hasSensitiveContent,
        /**
         * If non-empty, contains a human-readable description of the reason why access to this message must be restricted.
         */
        protected string                   $restrictionReason,
        /**
         * Content of the message.
         */
        protected MessageContent           $content,
        /**
         * Reply markup for the message; may be null if none.
         */
        protected ?ReplyMarkup             $replyMarkup,
    ) {}

    public static function fromArray(array $array): Message
    {
        return new static(
            $array['id'],
            TdSchemaRegistry::fromArray($array['sender_id']),
            $array['chat_id'],
            isset($array['sending_state']) ? TdSchemaRegistry::fromArray($array['sending_state']) : null,
            isset($array['scheduling_state']) ? TdSchemaRegistry::fromArray($array['scheduling_state']) : null,
            $array['is_outgoing'],
            $array['is_pinned'],
            $array['is_from_offline'],
            $array['can_be_saved'],
            $array['has_timestamped_media'],
            $array['is_channel_post'],
            $array['contains_unread_mention'],
            $array['date'],
            $array['edit_date'],
            isset($array['forward_info']) ? TdSchemaRegistry::fromArray($array['forward_info']) : null,
            isset($array['import_info']) ? TdSchemaRegistry::fromArray($array['import_info']) : null,
            isset($array['interaction_info']) ? TdSchemaRegistry::fromArray($array['interaction_info']) : null,
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['unread_reactions']),
            isset($array['fact_check']) ? TdSchemaRegistry::fromArray($array['fact_check']) : null,
            isset($array['reply_to']) ? TdSchemaRegistry::fromArray($array['reply_to']) : null,
            $array['message_thread_id'],
            isset($array['topic_id']) ? TdSchemaRegistry::fromArray($array['topic_id']) : null,
            isset($array['self_destruct_type']) ? TdSchemaRegistry::fromArray($array['self_destruct_type']) : null,
            $array['self_destruct_in'],
            $array['auto_delete_in'],
            $array['via_bot_user_id'],
            $array['sender_business_bot_user_id'],
            $array['sender_boost_count'],
            $array['paid_message_star_count'],
            $array['author_signature'],
            $array['media_album_id'],
            $array['effect_id'],
            $array['has_sensitive_content'],
            $array['restriction_reason'],
            TdSchemaRegistry::fromArray($array['content']),
            isset($array['reply_markup']) ? TdSchemaRegistry::fromArray($array['reply_markup']) : null,
        );
    }

    public function getAuthorSignature(): string
    {
        return $this->authorSignature;
    }

    public function getAutoDeleteIn(): float
    {
        return $this->autoDeleteIn;
    }

    public function getCanBeSaved(): bool
    {
        return $this->canBeSaved;
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getContainsUnreadMention(): bool
    {
        return $this->containsUnreadMention;
    }

    public function getContent(): MessageContent
    {
        return $this->content;
    }

    public function getDate(): int
    {
        return $this->date;
    }

    public function getEditDate(): int
    {
        return $this->editDate;
    }

    public function getEffectId(): int
    {
        return $this->effectId;
    }

    public function getFactCheck(): ?FactCheck
    {
        return $this->factCheck;
    }

    public function getForwardInfo(): ?MessageForwardInfo
    {
        return $this->forwardInfo;
    }

    public function getHasSensitiveContent(): bool
    {
        return $this->hasSensitiveContent;
    }

    public function getHasTimestampedMedia(): bool
    {
        return $this->hasTimestampedMedia;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getImportInfo(): ?MessageImportInfo
    {
        return $this->importInfo;
    }

    public function getInteractionInfo(): ?MessageInteractionInfo
    {
        return $this->interactionInfo;
    }

    public function getIsChannelPost(): bool
    {
        return $this->isChannelPost;
    }

    public function getIsFromOffline(): bool
    {
        return $this->isFromOffline;
    }

    public function getIsOutgoing(): bool
    {
        return $this->isOutgoing;
    }

    public function getIsPinned(): bool
    {
        return $this->isPinned;
    }

    public function getMediaAlbumId(): int
    {
        return $this->mediaAlbumId;
    }

    public function getMessageThreadId(): int
    {
        return $this->messageThreadId;
    }

    public function getPaidMessageStarCount(): int
    {
        return $this->paidMessageStarCount;
    }

    public function getReplyMarkup(): ?ReplyMarkup
    {
        return $this->replyMarkup;
    }

    public function getReplyTo(): ?MessageReplyTo
    {
        return $this->replyTo;
    }

    public function getRestrictionReason(): string
    {
        return $this->restrictionReason;
    }

    public function getSchedulingState(): ?MessageSchedulingState
    {
        return $this->schedulingState;
    }

    public function getSelfDestructIn(): float
    {
        return $this->selfDestructIn;
    }

    public function getSelfDestructType(): ?MessageSelfDestructType
    {
        return $this->selfDestructType;
    }

    public function getSenderBoostCount(): int
    {
        return $this->senderBoostCount;
    }

    public function getSenderBusinessBotUserId(): int
    {
        return $this->senderBusinessBotUserId;
    }

    public function getSenderId(): MessageSender
    {
        return $this->senderId;
    }

    public function getSendingState(): ?MessageSendingState
    {
        return $this->sendingState;
    }

    public function getTopicId(): ?MessageTopic
    {
        return $this->topicId;
    }

    public function getUnreadReactions(): array
    {
        return $this->unreadReactions;
    }

    public function getViaBotUserId(): int
    {
        return $this->viaBotUserId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                       => static::TYPE_NAME,
            'id'                          => $this->id,
            'sender_id'                   => $this->senderId->typeSerialize(),
            'chat_id'                     => $this->chatId,
            'sending_state'               => $this->sendingState ?? null,
            'scheduling_state'            => $this->schedulingState ?? null,
            'is_outgoing'                 => $this->isOutgoing,
            'is_pinned'                   => $this->isPinned,
            'is_from_offline'             => $this->isFromOffline,
            'can_be_saved'                => $this->canBeSaved,
            'has_timestamped_media'       => $this->hasTimestampedMedia,
            'is_channel_post'             => $this->isChannelPost,
            'contains_unread_mention'     => $this->containsUnreadMention,
            'date'                        => $this->date,
            'edit_date'                   => $this->editDate,
            'forward_info'                => $this->forwardInfo ?? null,
            'import_info'                 => $this->importInfo ?? null,
            'interaction_info'            => $this->interactionInfo ?? null,
            'unread_reactions'            => array_map(static fn($x) => $x->typeSerialize(), $this->unreadReactions),
            'fact_check'                  => $this->factCheck ?? null,
            'reply_to'                    => $this->replyTo ?? null,
            'message_thread_id'           => $this->messageThreadId,
            'topic_id'                    => $this->topicId ?? null,
            'self_destruct_type'          => $this->selfDestructType ?? null,
            'self_destruct_in'            => $this->selfDestructIn,
            'auto_delete_in'              => $this->autoDeleteIn,
            'via_bot_user_id'             => $this->viaBotUserId,
            'sender_business_bot_user_id' => $this->senderBusinessBotUserId,
            'sender_boost_count'          => $this->senderBoostCount,
            'paid_message_star_count'     => $this->paidMessageStarCount,
            'author_signature'            => $this->authorSignature,
            'media_album_id'              => $this->mediaAlbumId,
            'effect_id'                   => $this->effectId,
            'has_sensitive_content'       => $this->hasSensitiveContent,
            'restriction_reason'          => $this->restrictionReason,
            'content'                     => $this->content->typeSerialize(),
            'reply_markup'                => $this->replyMarkup ?? null,
        ];
    }
}
