      <div class="flex p-4 border-b border-b-gray-400">
                <div class="mr-2 flex-shrink-0">
                     <a href="{{ route('profile', $tweet->user) }}"><img src="https://i.pravatar.cc/50?u={{$tweet->user->email}}" class="rounded-full mr-2"></a>
            </div>
            <div>
                <h5 class="font-bold mb-4"> <a href="{{ route('profile', $tweet->user) }}">{{ucfirst($tweet->user->name)}}</a></h5>
                <p class="text-sm">{{$tweet->body}}</p>
                </div>
        </div>