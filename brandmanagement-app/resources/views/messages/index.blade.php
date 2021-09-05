@extends('layouts.app')

@section('content')
 <div class="row mx-12 chart-row">
    <div class="w-3/12 ">
        <div class="user">
            <h1 class="text-3xl	">Users</h1>
            
            <ul class="list-group list-chat-item mt-4">
                @if ($users->count() > 0)
                    @foreach ($users as $user)
                        <li class="chat-user-list">
                            <a href="{{ route('messages.conversation', $user->id) }}"> 
                                <div class="chat-image">
                                        {!! makeImageFromName($user->name) !!}
                                        <i class="fa fa-circle user-status-icon user-icon-{{$user->id}}" title="away"></i>
                                </div>
                                
                                <div class="chat-name font-bold	">
                                    {{$user->name}}
                                </div>
                                
                            </a>
                        </li>
                    @endforeach                    
                @endif
            </ul>
        </div>
    </div>

    <div class="w-9/12">
        <h2 class="text-2xl">
            Message
        </h2>
        Select user from the list to begin conversation. 
    </div>
 </div>
@endsection

@push('scripts')
    <script>
        $(function () {
            let user_id = "{{ auth()->user()->id }}";
            let ip_address = '127.0.0.1';
            let socket_port = '8005';
            let socket = io(ip_address + ':' + socket_port);       
            
            socket.on('connect', function(){
                socket.emit('user_connected', user_id);
            });

            socket.on('updateUserStatus', (data) => {
                let $userStatusIcon = $('.user-status-icon');
                $userStatusIcon.removeClass('text-green-500');
                $userStatusIcon.attr('title','Away');

                $.each(data, function(key, val){
                    if(val !== null && val !== 0){
                            console.log(key);
                        let $userIcon = $(".user-icon-"+key);
                        $userIcon.addClass('text-green-500');
                        $userIcon.attr('title','Online');
                    }
                });
            });
        });
    </script>
@endpush