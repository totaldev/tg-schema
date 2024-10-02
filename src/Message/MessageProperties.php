<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\TdObject;

/**
 * Contains properties of a message and describes actions that can be done with the message right now.
 */
class MessageProperties extends TdObject
{
    public const TYPE_NAME = 'messageProperties';

    public function __construct(
        /**
         * True, if content of the message can be copied to a secret chat using inputMessageForwarded or forwardMessages with copy options.
         */
        protected bool $canBeCopiedToSecretChat,
        /**
         * True, if the message can be deleted only for the current user while other users will continue to see it using the method deleteMessages with revoke == false.
         */
        protected bool $canBeDeletedOnlyForSelf,
        /**
         * True, if the message can be deleted for all users using the method deleteMessages with revoke == true.
         */
        protected bool $canBeDeletedForAllUsers,
        /**
         * True, if the message can be edited using the methods editMessageText, editMessageMedia, editMessageCaption, or editMessageReplyMarkup. For live location and poll messages this fields shows whether editMessageLiveLocation or stopPoll can be used with this message.
         */
        protected bool $canBeEdited,
        /**
         * True, if the message can be forwarded using inputMessageForwarded or forwardMessages.
         */
        protected bool $canBeForwarded,
        /**
         * True, if the message can be paid using inputInvoiceMessage.
         */
        protected bool $canBePaid,
        /**
         * True, if the message can be pinned or unpinned in the chat using pinChatMessage or unpinChatMessage.
         */
        protected bool $canBePinned,
        /**
         * True, if the message can be replied in the same chat and forum topic using inputMessageReplyToMessage.
         */
        protected bool $canBeReplied,
        /**
         * True, if the message can be replied in another chat or forum topic using inputMessageReplyToExternalMessage.
         */
        protected bool $canBeRepliedInAnotherChat,
        /**
         * True, if content of the message can be saved locally or copied using inputMessageForwarded or forwardMessages with copy options.
         */
        protected bool $canBeSaved,
        /**
         * True, if the message can be shared in a story using inputStoryAreaTypeMessage.
         */
        protected bool $canBeSharedInStory,
        /**
         * True, if scheduling state of the message can be edited.
         */
        protected bool $canEditSchedulingState,
        /**
         * True, if code for message embedding can be received using getMessageEmbeddingCode.
         */
        protected bool $canGetEmbeddingCode,
        /**
         * True, if a link can be generated for the message using getMessageLink.
         */
        protected bool $canGetLink,
        /**
         * True, if media timestamp links can be generated for media timestamp entities in the message text, caption or link preview description using getMessageLink.
         */
        protected bool $canGetMediaTimestampLinks,
        /**
         * True, if information about the message thread is available through getMessageThread and getMessageThreadHistory.
         */
        protected bool $canGetMessageThread,
        /**
         * True, if read date of the message can be received through getMessageReadDate.
         */
        protected bool $canGetReadDate,
        /**
         * True, if message statistics are available through getMessageStatistics and message forwards can be received using getMessagePublicForwards.
         */
        protected bool $canGetStatistics,
        /**
         * True, if chat members already viewed the message can be received through getMessageViewers.
         */
        protected bool $canGetViewers,
        /**
         * True, if speech can be recognized for the message through recognizeSpeech.
         */
        protected bool $canRecognizeSpeech,
        /**
         * True, if the message can be reported using reportChat.
         */
        protected bool $canReportChat,
        /**
         * True, if reactions on the message can be reported through reportMessageReactions.
         */
        protected bool $canReportReactions,
        /**
         * True, if the message can be reported using reportSupergroupSpam.
         */
        protected bool $canReportSupergroupSpam,
        /**
         * True, if fact check for the message can be changed through setMessageFactCheck.
         */
        protected bool $canSetFactCheck,
        /**
         * True, if message statistics must be available from context menu of the message.
         */
        protected bool $needShowStatistics,
    ) {}

    public static function fromArray(array $array): MessageProperties
    {
        return new static(
            $array['can_be_copied_to_secret_chat'],
            $array['can_be_deleted_only_for_self'],
            $array['can_be_deleted_for_all_users'],
            $array['can_be_edited'],
            $array['can_be_forwarded'],
            $array['can_be_paid'],
            $array['can_be_pinned'],
            $array['can_be_replied'],
            $array['can_be_replied_in_another_chat'],
            $array['can_be_saved'],
            $array['can_be_shared_in_story'],
            $array['can_edit_scheduling_state'],
            $array['can_get_embedding_code'],
            $array['can_get_link'],
            $array['can_get_media_timestamp_links'],
            $array['can_get_message_thread'],
            $array['can_get_read_date'],
            $array['can_get_statistics'],
            $array['can_get_viewers'],
            $array['can_recognize_speech'],
            $array['can_report_chat'],
            $array['can_report_reactions'],
            $array['can_report_supergroup_spam'],
            $array['can_set_fact_check'],
            $array['need_show_statistics'],
        );
    }

    public function getCanBeCopiedToSecretChat(): bool
    {
        return $this->canBeCopiedToSecretChat;
    }

    public function getCanBeDeletedForAllUsers(): bool
    {
        return $this->canBeDeletedForAllUsers;
    }

    public function getCanBeDeletedOnlyForSelf(): bool
    {
        return $this->canBeDeletedOnlyForSelf;
    }

    public function getCanBeEdited(): bool
    {
        return $this->canBeEdited;
    }

    public function getCanBeForwarded(): bool
    {
        return $this->canBeForwarded;
    }

    public function getCanBePaid(): bool
    {
        return $this->canBePaid;
    }

    public function getCanBePinned(): bool
    {
        return $this->canBePinned;
    }

    public function getCanBeReplied(): bool
    {
        return $this->canBeReplied;
    }

    public function getCanBeRepliedInAnotherChat(): bool
    {
        return $this->canBeRepliedInAnotherChat;
    }

    public function getCanBeSaved(): bool
    {
        return $this->canBeSaved;
    }

    public function getCanBeSharedInStory(): bool
    {
        return $this->canBeSharedInStory;
    }

    public function getCanEditSchedulingState(): bool
    {
        return $this->canEditSchedulingState;
    }

    public function getCanGetEmbeddingCode(): bool
    {
        return $this->canGetEmbeddingCode;
    }

    public function getCanGetLink(): bool
    {
        return $this->canGetLink;
    }

    public function getCanGetMediaTimestampLinks(): bool
    {
        return $this->canGetMediaTimestampLinks;
    }

    public function getCanGetMessageThread(): bool
    {
        return $this->canGetMessageThread;
    }

    public function getCanGetReadDate(): bool
    {
        return $this->canGetReadDate;
    }

    public function getCanGetStatistics(): bool
    {
        return $this->canGetStatistics;
    }

    public function getCanGetViewers(): bool
    {
        return $this->canGetViewers;
    }

    public function getCanRecognizeSpeech(): bool
    {
        return $this->canRecognizeSpeech;
    }

    public function getCanReportChat(): bool
    {
        return $this->canReportChat;
    }

    public function getCanReportReactions(): bool
    {
        return $this->canReportReactions;
    }

    public function getCanReportSupergroupSpam(): bool
    {
        return $this->canReportSupergroupSpam;
    }

    public function getCanSetFactCheck(): bool
    {
        return $this->canSetFactCheck;
    }

    public function getNeedShowStatistics(): bool
    {
        return $this->needShowStatistics;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                          => static::TYPE_NAME,
            'can_be_copied_to_secret_chat'   => $this->canBeCopiedToSecretChat,
            'can_be_deleted_only_for_self'   => $this->canBeDeletedOnlyForSelf,
            'can_be_deleted_for_all_users'   => $this->canBeDeletedForAllUsers,
            'can_be_edited'                  => $this->canBeEdited,
            'can_be_forwarded'               => $this->canBeForwarded,
            'can_be_paid'                    => $this->canBePaid,
            'can_be_pinned'                  => $this->canBePinned,
            'can_be_replied'                 => $this->canBeReplied,
            'can_be_replied_in_another_chat' => $this->canBeRepliedInAnotherChat,
            'can_be_saved'                   => $this->canBeSaved,
            'can_be_shared_in_story'         => $this->canBeSharedInStory,
            'can_edit_scheduling_state'      => $this->canEditSchedulingState,
            'can_get_embedding_code'         => $this->canGetEmbeddingCode,
            'can_get_link'                   => $this->canGetLink,
            'can_get_media_timestamp_links'  => $this->canGetMediaTimestampLinks,
            'can_get_message_thread'         => $this->canGetMessageThread,
            'can_get_read_date'              => $this->canGetReadDate,
            'can_get_statistics'             => $this->canGetStatistics,
            'can_get_viewers'                => $this->canGetViewers,
            'can_recognize_speech'           => $this->canRecognizeSpeech,
            'can_report_chat'                => $this->canReportChat,
            'can_report_reactions'           => $this->canReportReactions,
            'can_report_supergroup_spam'     => $this->canReportSupergroupSpam,
            'can_set_fact_check'             => $this->canSetFactCheck,
            'need_show_statistics'           => $this->needShowStatistics,
        ];
    }
}
