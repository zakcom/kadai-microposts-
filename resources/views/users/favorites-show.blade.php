@if (count($microposts) > 0)
    <ul class="list-unstyled">
        @foreach ($microposts as $micropost)
            <li class="media">
                {{-- ユーザのメールアドレスをもとにGravatarを取得して表示 --}}
                <img class="mr-2 rounded" src="{{ Gravatar::get($user->email, ['size' => 50]) }}" alt="">
                <div class="media-body">
                    <div>
                        {{ $micropost->content }}
                    </div>
                    <div>
                        {{-- お気に入り投稿一覧 --}}
                        
            　　　　　  </div>
                </div>
            </li>
        @endforeach
    </ul>
    
    {{-- ページネーションのリンク --}}
    {{ $microposts->links() }}
@endif