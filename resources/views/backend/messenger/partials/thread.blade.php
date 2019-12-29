<?php $class = $thread->isUnread(Auth::id()) ? 'alert-info' : ''; ?>

<div class="media alert {{ $class }}">
    <h4 class="media-heading">
        <a href="{{ route('admin.messages.show', $thread->id) }}">{{ $thread->subject }}</a>
        ({{ $thread->userUnreadMessagesCount(Auth::id()) }} unread)</h4>
        <br/>
    <p>
        {{ $thread->latest_message->body }}
    </p>
    <br/>
    <p>
        <small><strong>Creator:</strong> {{ $thread->participantsString(Auth::id(), ['email']) }}</small>
    </p>
    <br/>
    <p>
        <small><strong>Participants:</strong> {{ $thread->participantsString(Auth::id(), ['first_name']) }}</small>
    </p>
</div>
