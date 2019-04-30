<li class="list-group-item">
    <div class="d-flex">
        <div class="">
            <img src="{{ $record['data']->user->avatar }}" style="height: 30px; width: 30px; border-radius: 50%;">
        </div>
        <div class="pl-3" style="min-width: 0;">
            <div class="text-muted -font-weight-bold" style="font-size: 0.875rem;">
                新增了一個標籤：<a href="/view/{{ $record['data']->entity->hashids() }}">{{ $record['data']->entity->name }}</a>
            </div>
            <div class="text-truncate py-2">
                {{ $record['data']->tag->name }}
            </div>
            <div class="" style="font-size: 0.875rem;">
                <span class="text-muted">
                    <?php Carbon\Carbon::setLocale('zh-TW'); ?>
                    {{ $record['data']->created_at->diffForHumans() }}
                </span>
            </div>
        </div>
    </div>
</li>
