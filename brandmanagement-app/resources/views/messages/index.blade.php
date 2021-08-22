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
                            <a href="">
                                <div class="chat-image">
                                        {!! makeImageFromName($user->name) !!}
                                </div>
                                
                                <div class="chat-name">
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