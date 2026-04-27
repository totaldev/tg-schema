<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\Fact\FactCheck;
use Totaldev\TgSchema\Reply\ReplyMarkup;
use Totaldev\TgSchema\Restriction\RestrictionInfo;
use Totaldev\TgSchema\Suggested\SuggestedPostInfo;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Unread\UnreadReaction;

/**
 * Describes a message.
 */
class Message extends TdObject
{
    public const string TYPE_NAME = 'message';

    public function __construct(
        /**
         * For channel posts and anonymous group messages, optional author signature.
         */
        protected string                   $authorSignature,
        /**
         * Time left before the message will be automatically deleted by message_auto_delete_time setting of the chat, in seconds; 0 if never.
         */
        protected float                    $autoDeleteIn,
        /**
         * True, if content of the message can be saved locally.
         */
        protected bool                     $canBeSaved,
        /**
         * Chat identifier.
         */
        protected int                      $chatId,
        /**
         * True, if the message contains an unread mention for the current user.
         */
        protected bool                     $containsUnreadMention,
        /**
         * Content of the message.
         */
        protected MessageContent           $content,
        /**
         * Point in time (Unix timestamp) when the message was sent; 0 for scheduled messages.
         */
        protected int                      $date,
        /**
         * Point in time (Unix timestamp) when the message was last edited; 0 for scheduled messages.
         */
        protected int                      $editDate,
        /**
         * Unique identifier of the effect added to the message; 0 if none.
         */
        protected int                      $effectId,
        /**
         * Information about fact-check added to the message; may be null if none.
         */
        protected ?FactCheck               $factCheck,
        /**
         * Information about the initial message sender; may be null if none or unknown.
         */
        protected ?MessageForwardInfo      $forwardInfo,
        /**
         * True, if media timestamp entities refers to a media in this message as opposed to a media in the replied message.
         */
        protected bool                     $hasTimestampedMedia,
        /**
         * Message identifier; unique for the chat to which the message belongs.
         */
        protected int                      $id,
        /**
         * Information about the initial message for messages created with importMessages; may be null if the message isn't imported.
         */
        protected ?MessageImportInfo       $importInfo,
        /**
         * Information about interactions with the message; may be null if none.
         */
        protected ?MessageInteractionInfo  $interactionInfo,
        /**
         * True, if the message is a channel post. All messages to channels are channel posts, all other messages are not channel posts.
         */
        protected bool                     $isChannelPost,
        /**
         * True, if the message was sent because of a scheduled action by the message sender, for example, as away, or greeting service message.
         */
        protected bool                     $isFromOffline,
        /**
         * True, if the message is outgoing.
         */
        protected bool                     $isOutgoing,
        /**
         * True, if the message is a suggested channel post which was paid in Telegram Stars; a warning must be shown if the message is deleted in less than getOption("suggested_post_lifetime_min") seconds after sending.
         */
        protected bool                     $isPaidStarSuggestedPost,
        /**
         * True, if the message is a suggested channel post which was paid in Toncoins; a warning must be shown if the message is deleted in less than getOption("suggested_post_lifetime_min") seconds after sending.
         */
        protected bool                     $isPaidTonSuggestedPost,
        /**
         * True, if the message is pinned.
         */
        protected bool                     $isPinned,
        /**
         * Unique identifier of an album this message belongs to; 0 if none. Only audios, documents, photos and videos can be grouped together in albums.
         */
        protected int                      $mediaAlbumId,
        /**
         * The number of Telegram Stars the sender paid to send the message.
         */
        protected int                      $paidMessageStarCount,
        /**
         * Reply markup for the message; may be null if none.
         */
        protected ?ReplyMarkup             $replyMarkup,
        /**
         * Information about the message or the story this message is replying to; may be null if none.
         */
        protected ?MessageReplyTo          $replyTo,
        /**
         * Information about the restrictions that must be applied to the message content; may be null if none.
         */
        protected ?RestrictionInfo         $restrictionInfo,
        /**
         * The scheduling state of the message; may be null if the message isn't scheduled.
         */
        protected ?MessageSchedulingState  $schedulingState,
        /**
         * Time left before the message self-destruct timer expires, in seconds; 0 if self-destruction isn't scheduled yet.
         */
        protected float                    $selfDestructIn,
        /**
         * The message's self-destruct type; may be null if none.
         */
        protected ?MessageSelfDestructType $selfDestructType,
        /**
         * Number of times the sender of the message boosted the supergroup at the time the message was sent; 0 if none or unknown. For messages sent by the current user, supergroupFullInfo.my_boost_count must be used instead.
         */
        protected int                      $senderBoostCount,
        /**
         * If non-zero, the user identifier of the business bot that sent this message.
         */
        protected int                      $senderBusinessBotUserId,
        /**
         * Identifier of the sender of the message.
         */
        protected MessageSender            $senderId,
        /**
         * The sending state of the message; may be null if the message isn't being sent and didn't fail to be sent.
         */
        protected ?MessageSendingState     $sendingState,
        /**
         * Information about the suggested post; may be null if the message isn't a suggested post.
         */
        protected ?SuggestedPostInfo       $suggestedPostInfo,
        /**
         * Identifier of the topic within the chat to which the message belongs; may be null if none.
         */
        protected ?MessageTopic            $topicId,
        /**
         * Information about unread reactions added to the message.
         *
         * @var UnreadReaction[]
         */
        protected array                    $unreadReactions,
        /**
         * If non-zero, the user identifier of the inline bot through which this message was sent.
         */
        protected int                      $viaBotUserId,
    ) {}

    public static function fromArray(array $array): Message
    {
        return new static(
            authorSignature        : $array['author_signature'],
            autoDeleteIn           : $array['auto_delete_in'],
            canBeSaved             : $array['can_be_saved'],
            chatId                 : $array['chat_id'],
            containsUnreadMention  : $array['contains_unread_mention'],
            content                : TdSchemaRegistry::fromArray($array['content']),
            date                   : $array['date'],
            editDate               : $array['edit_date'],
            effectId               : $array['effect_id'],
            factCheck              : (isset($array['fact_check']) ? TdSchemaRegistry::fromArray($array['fact_check']) : null),
            forwardInfo            : (isset($array['forward_info']) ? TdSchemaRegistry::fromArray($array['forward_info']) : null),
            hasTimestampedMedia    : $array['has_timestamped_media'],
            id                     : $array['id'],
            importInfo             : (isset($array['import_info']) ? TdSchemaRegistry::fromArray($array['import_info']) : null),
            interactionInfo        : (isset($array['interaction_info']) ? TdSchemaRegistry::fromArray($array['interaction_info']) : null),
            isChannelPost          : $array['is_channel_post'],
            isFromOffline          : $array['is_from_offline'],
            isOutgoing             : $array['is_outgoing'],
            isPaidStarSuggestedPost: $array['is_paid_star_suggested_post'],
            isPaidTonSuggestedPost : $array['is_paid_ton_suggested_post'],
            isPinned               : $array['is_pinned'],
            mediaAlbumId           : $array['media_album_id'],
            paidMessageStarCount   : $array['paid_message_star_count'],
            replyMarkup            : (isset($array['reply_markup']) ? TdSchemaRegistry::fromArray($array['reply_markup']) : null),
            replyTo                : (isset($array['reply_to']) ? TdSchemaRegistry::fromArray($array['reply_to']) : null),
            restrictionInfo        : (isset($array['restriction_info']) ? TdSchemaRegistry::fromArray($array['restriction_info']) : null),
            schedulingState        : (isset($array['scheduling_state']) ? TdSchemaRegistry::fromArray($array['scheduling_state']) : null),
            selfDestructIn         : $array['self_destruct_in'],
            selfDestructType       : (isset($array['self_destruct_type']) ? TdSchemaRegistry::fromArray($array['self_destruct_type']) : null),
            senderBoostCount       : $array['sender_boost_count'],
            senderBusinessBotUserId: $array['sender_business_bot_user_id'],
            senderId               : TdSchemaRegistry::fromArray($array['sender_id']),
            sendingState           : (isset($array['sending_state']) ? TdSchemaRegistry::fromArray($array['sending_state']) : null),
            suggestedPostInfo      : (isset($array['suggested_post_info']) ? TdSchemaRegistry::fromArray($array['suggested_post_info']) : null),
            topicId                : (isset($array['topic_id']) ? TdSchemaRegistry::fromArray($array['topic_id']) : null),
            unreadReactions        : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['unread_reactions']),
            viaBotUserId           : $array['via_bot_user_id'],
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

    public function getIsPaidStarSuggestedPost(): bool
    {
        return $this->isPaidStarSuggestedPost;
    }

    public function getIsPaidTonSuggestedPost(): bool
    {
        return $this->isPaidTonSuggestedPost;
    }

    public function getIsPinned(): bool
    {
        return $this->isPinned;
    }

    public function getMediaAlbumId(): int
    {
        return $this->mediaAlbumId;
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

    public function getRestrictionInfo(): ?RestrictionInfo
    {
        return $this->restrictionInfo;
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

    public function getSuggestedPostInfo(): ?SuggestedPostInfo
    {
        return $this->suggestedPostInfo;
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

    public function setAuthorSignature(string $value): static
    {
        $this->authorSignature = $value;

        return $this;
    }

    public function setAutoDeleteIn(float $value): static
    {
        $this->autoDeleteIn = $value;

        return $this;
    }

    public function setCanBeSaved(bool $value): static
    {
        $this->canBeSaved = $value;

        return $this;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setContainsUnreadMention(bool $value): static
    {
        $this->containsUnreadMention = $value;

        return $this;
    }

    public function setContent(MessageContent $value): static
    {
        $this->content = $value;

        return $this;
    }

    public function setDate(int $value): static
    {
        $this->date = $value;

        return $this;
    }

    public function setEditDate(int $value): static
    {
        $this->editDate = $value;

        return $this;
    }

    public function setEffectId(int $value): static
    {
        $this->effectId = $value;

        return $this;
    }

    public function setFactCheck(?FactCheck $value): static
    {
        $this->factCheck = $value;

        return $this;
    }

    public function setForwardInfo(?MessageForwardInfo $value): static
    {
        $this->forwardInfo = $value;

        return $this;
    }

    public function setHasTimestampedMedia(bool $value): static
    {
        $this->hasTimestampedMedia = $value;

        return $this;
    }

    public function setId(int $value): static
    {
        $this->id = $value;

        return $this;
    }

    public function setImportInfo(?MessageImportInfo $value): static
    {
        $this->importInfo = $value;

        return $this;
    }

    public function setInteractionInfo(?MessageInteractionInfo $value): static
    {
        $this->interactionInfo = $value;

        return $this;
    }

    public function setIsChannelPost(bool $value): static
    {
        $this->isChannelPost = $value;

        return $this;
    }

    public function setIsFromOffline(bool $value): static
    {
        $this->isFromOffline = $value;

        return $this;
    }

    public function setIsOutgoing(bool $value): static
    {
        $this->isOutgoing = $value;

        return $this;
    }

    public function setIsPaidStarSuggestedPost(bool $value): static
    {
        $this->isPaidStarSuggestedPost = $value;

        return $this;
    }

    public function setIsPaidTonSuggestedPost(bool $value): static
    {
        $this->isPaidTonSuggestedPost = $value;

        return $this;
    }

    public function setIsPinned(bool $value): static
    {
        $this->isPinned = $value;

        return $this;
    }

    public function setMediaAlbumId(int $value): static
    {
        $this->mediaAlbumId = $value;

        return $this;
    }

    public function setPaidMessageStarCount(int $value): static
    {
        $this->paidMessageStarCount = $value;

        return $this;
    }

    public function setReplyMarkup(?ReplyMarkup $value): static
    {
        $this->replyMarkup = $value;

        return $this;
    }

    public function setReplyTo(?MessageReplyTo $value): static
    {
        $this->replyTo = $value;

        return $this;
    }

    public function setRestrictionInfo(?RestrictionInfo $value): static
    {
        $this->restrictionInfo = $value;

        return $this;
    }

    public function setSchedulingState(?MessageSchedulingState $value): static
    {
        $this->schedulingState = $value;

        return $this;
    }

    public function setSelfDestructIn(float $value): static
    {
        $this->selfDestructIn = $value;

        return $this;
    }

    public function setSelfDestructType(?MessageSelfDestructType $value): static
    {
        $this->selfDestructType = $value;

        return $this;
    }

    public function setSenderBoostCount(int $value): static
    {
        $this->senderBoostCount = $value;

        return $this;
    }

    public function setSenderBusinessBotUserId(int $value): static
    {
        $this->senderBusinessBotUserId = $value;

        return $this;
    }

    public function setSenderId(MessageSender $value): static
    {
        $this->senderId = $value;

        return $this;
    }

    public function setSendingState(?MessageSendingState $value): static
    {
        $this->sendingState = $value;

        return $this;
    }

    public function setSuggestedPostInfo(?SuggestedPostInfo $value): static
    {
        $this->suggestedPostInfo = $value;

        return $this;
    }

    public function setTopicId(?MessageTopic $value): static
    {
        $this->topicId = $value;

        return $this;
    }

    public function setUnreadReactions(array $value): static
    {
        $this->unreadReactions = $value;

        return $this;
    }

    public function setViaBotUserId(int $value): static
    {
        $this->viaBotUserId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                       => static::TYPE_NAME,
            'author_signature'            => $this->authorSignature,
            'auto_delete_in'              => $this->autoDeleteIn,
            'can_be_saved'                => $this->canBeSaved,
            'chat_id'                     => $this->chatId,
            'contains_unread_mention'     => $this->containsUnreadMention,
            'content'                     => $this->content->jsonSerialize(),
            'date'                        => $this->date,
            'edit_date'                   => $this->editDate,
            'effect_id'                   => $this->effectId,
            'fact_check'                  => (null !== $this->factCheck ? $this->factCheck->jsonSerialize() : null),
            'forward_info'                => (null !== $this->forwardInfo ? $this->forwardInfo->jsonSerialize() : null),
            'has_timestamped_media'       => $this->hasTimestampedMedia,
            'id'                          => $this->id,
            'import_info'                 => (null !== $this->importInfo ? $this->importInfo->jsonSerialize() : null),
            'interaction_info'            => (null !== $this->interactionInfo ? $this->interactionInfo->jsonSerialize() : null),
            'is_channel_post'             => $this->isChannelPost,
            'is_from_offline'             => $this->isFromOffline,
            'is_outgoing'                 => $this->isOutgoing,
            'is_paid_star_suggested_post' => $this->isPaidStarSuggestedPost,
            'is_paid_ton_suggested_post'  => $this->isPaidTonSuggestedPost,
            'is_pinned'                   => $this->isPinned,
            'media_album_id'              => $this->mediaAlbumId,
            'paid_message_star_count'     => $this->paidMessageStarCount,
            'reply_markup'                => (null !== $this->replyMarkup ? $this->replyMarkup->jsonSerialize() : null),
            'reply_to'                    => (null !== $this->replyTo ? $this->replyTo->jsonSerialize() : null),
            'restriction_info'            => (null !== $this->restrictionInfo ? $this->restrictionInfo->jsonSerialize() : null),
            'scheduling_state'            => (null !== $this->schedulingState ? $this->schedulingState->jsonSerialize() : null),
            'self_destruct_in'            => $this->selfDestructIn,
            'self_destruct_type'          => (null !== $this->selfDestructType ? $this->selfDestructType->jsonSerialize() : null),
            'sender_boost_count'          => $this->senderBoostCount,
            'sender_business_bot_user_id' => $this->senderBusinessBotUserId,
            'sender_id'                   => $this->senderId->jsonSerialize(),
            'sending_state'               => (null !== $this->sendingState ? $this->sendingState->jsonSerialize() : null),
            'suggested_post_info'         => (null !== $this->suggestedPostInfo ? $this->suggestedPostInfo->jsonSerialize() : null),
            'topic_id'                    => (null !== $this->topicId ? $this->topicId->jsonSerialize() : null),
            'unread_reactions'            => array_map(static fn($x) => $x->jsonSerialize(), $this->unreadReactions),
            'via_bot_user_id'             => $this->viaBotUserId,
        ];
    }
}
