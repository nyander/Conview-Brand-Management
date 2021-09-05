@extends('layouts.app')

@section('content')
 <div class="row mx-10 chart-row">
    <div class="w-3/12 ">
        <div class="user">
            <h1 class="text-3xl	">Manufacturers</h1>
            
            <ul class="list-group list-chat-item mt-4">
                @if ($users->count() > 0)
                    @foreach ($users as $user)
                        <li class="chat-user-list 
                        @if($user->id == $friendInfo->id) active @endif">
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

    <div class="w-8/12 chat-section ml-2">
        <div class="chat-header">
            <div class="chat-image">
                {!! makeImageFromName($user->name) !!}
            </div>
            
            <div class="chat-name font-bold	">
                {{$user->name}}                
                <i class="fa fa-circle user-status-head" title="away" 
                    id="userStatusHead{{$friendInfo->id}}"></i>                
            </div>
        </div>

        <div class="chat-body" id="chatBody">
            <div class="message-listing" id="messageWrapper">
                <div class="row message align-items-center mb-2">
                    <div class="w-7/12 user-info">
                        <div class="chat-image">
                            {!! makeImageFromName('Richard Nyande')!!}
                        </div>

                        <div class="chat-name font-bold">
                            Richard Nyande
                            <span class="text-sm time text-gray-400" title="2020-05-06 10:30 PM">
                                10:30 PM
                            </span>
                        </div>
                    </div>

                    <div class="w-6/12 message-content">
                        <div class="message-text">
                            Message here
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="chat-box">
            <div class="chat-input bg-white" id="chatInput" contenteditable="">
                
            </div>

            <div class="chat-input-toolbar">
                <button class="btn btn-light btn-sm btn-file-upload" title="Add File">
                    <i class="fa fa-paperclip"></i>
                </button>  |

                <button title="Bold" class="btn btn-light btn-sm tool-items" 
                        onclick="document.execCommand('bold', false, '');">
                    <i class="fa fa-bold tool-icon"></i>
                </button> |
                <button title="Italic" class="btn btn-light btn-sm tool-items"
                    onclick="document.execCommand('italic', false, '');">
                    <i class="fa fa-italic tool-icon"></i>
                </button>

                
            </div>
        </div>
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