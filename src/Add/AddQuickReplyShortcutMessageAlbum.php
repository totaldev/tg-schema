<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Add;

use Totaldev\TgSchema\Input\InputMessageContent;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Adds 2-10 messages grouped together into an album to a quick reply shortcut. Currently, only audio, document, photo and video messages can be grouped into
 * an album. Documents and audio files can be only grouped in an album with messages of the same type. Returns sent messages.
 */
class AddQuickReplyShortcutMessageAlbum extends TdFunction
{
    public const TYPE_NAME = 'addQuickReplyShortcutMessageAlbum';

    public function __construct(
        /**
         * Name of the target shortcut.
         */
        protected string $shortcutName,
        /**
         * Identifier of a quick reply message in the same shortcut to be replied; pass 0 if none.
         */
        protected int    $replyToMessageId,
        /**
         * Contents of messages to be sent. At most 10 messages can be added to an album. All messages must have the same value of show_caption_above_media.
         *
         * @var InputMessageContent[]
         */
        protected array  $inputMessageContents
    ) {}

    public static function fromArray(array $array): AddQuickReplyShortcutMessageAlbum
    {
        return new static(
            $array['shortcut_name'],
            $array['reply_to_message_id'],
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['input_message_contents']),
        );
    }

    public function getInputMessageContents(): array
    {
        return $this->inputMessageContents;
    }

    public function getReplyToMessageId(): int
    {
        return $this->replyToMessageId;
    }

    public function getShortcutName(): string
    {
        return $this->shortcutName;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'               => static::TYPE_NAME,
            'shortcut_name'       => $this->shortcutName,
            'reply_to_message_id' => $this->replyToMessageId,
            array_map(fn($x) => $x->typeSerialize(), $this->inputMessageContents),
        ];
    }
}
