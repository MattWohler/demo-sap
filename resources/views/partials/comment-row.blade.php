<div class="m-list-timeline__item comment-row">
    <span class="m-list-timeline__badge m-list-timeline__badge--success"></span>
    <span class="m-list-timeline__text">{{ $comment->body }}</span>
    <span class="m-list-timeline__time">
        {{ $comment->created_at->diffForHumans() }}
        <br/>
        {{ $comment->user->full_name }}</span>
</div>