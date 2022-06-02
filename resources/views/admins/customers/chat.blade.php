@extends('layouts.admin')



{{-- chec if there's active one --}}
@php

    if (empty($activeId)) {
        $activeId = 0;
    }
    
@endphp


{{-- section --}}
@section('content')


{{-- breadcrubms --}}
<div class="border-bottom-2 py-32pt position-relative z-1">
    <div class="container page__container d-flex flex-column flex-md-row align-items-center text-center text-sm-left">
        <div class="flex d-flex flex-column flex-sm-row align-items-center mb-24pt mb-md-0">

            <div class="mb-24pt mb-sm-0 mr-sm-24pt">
                <h2 class="mb-0">Customers Chat</h2>

                <ol class="breadcrumb p-0 m-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.customers') }}">Customers</a></li>



                </ol>

            </div>
        </div>

    </div>
</div>
{{-- end breadcrubms --}}






{{-- content --}}
<div class="container page__container">
    <div class="page-section">
        <div class="row bg-white" style="border-radius: 3px;">

        
                

            {{-- users --}}
            <div class="col-4" style="height: 600px; overflow:auto">

                {{-- all users --}}
                @foreach ($customers as $customer)


                @if ($activeId == $customer->id)
                    {{-- user --}}
                    <a href="javascript:void(0);" id="user-chat-{{ $customer->id }}" class="row align-items-center user-chat active">

                @else
                    {{-- user --}}
                    <a href="javascript:void(0);" id="user-chat-{{ $customer->id }}" class="row align-items-center user-chat">
                @endif
                
                    <div class="col-3">
                        <img class="rounded-circle avatar-md" width="60" height="60"
                            src="{{ asset('assets/admin/images/customers/default.jpg') }}" alt="Generic placeholder image" style="object-fit:contain;">
                    </div>

                    <div class="col-9">
                        <h6 class="mb-1">{{ $customer->fname . " " . $customer->lname }}</h6>

                        {{-- get last message here --}}
                        @php
                            $lastIndex = $customer->messages->count();
                        @endphp

                        @if ($lastIndex == 0)
                            <p class="mb-0" style="white-space: nowrap;overflow:hidden; text-overflow:ellipsis;">Start Chatting Now</p>
                        @else
                            <p class="mb-0" style="white-space: nowrap;overflow:hidden; text-overflow:ellipsis;">{{ $customer->messages[$lastIndex-1]->message }}</p>
                        @endif
                        
                    </div>
                </a>


                @endforeach
                {{-- end foreach --}}


            </div>
            {{-- end users col --}}






            {{-- chats --}}
            <div class="col-8" style="height: 600px; overflow:auto; border-left:1px solid lightgrey;">


                {{-- the empty one appears at the start only --}}
                @if ($activeId == 0)
                    <div class="user-chat-content" style="height:530px; overflow:auto;">
                    
                    </div>
                @else
                    <div class="user-chat-content d-none" style="height:530px; overflow:auto;">
                    
                    </div>
                @endif
                



                @foreach ($customers as $customer)
                    
                @if ($activeId == $customer->id)
                <form id="user-chat-content-{{ $customer->id }}" action="{{ route('admin.sendMessage') }}" method="post" class="user-chat-content">


                @else
                <form id="user-chat-content-{{ $customer->id }}" action="{{ route('admin.sendMessage') }}" method="post" class="d-none user-chat-content">

                @endif

                    @csrf


                    <input type="hidden" name="customerid" value={{ $customer->id }}>

                    {{-- chat --}}
                    <div class="py-4 d-block" style="height:530px; overflow:auto;">



                        @foreach ($customer->messages as $message)
                            
                        @if ($message->type == "customer")
                            {{-- message from customer --}}
                            <div class="d-block text-left">
                                <p class="admin-chat-receiver">
                                    {{ $message->message }}<br>
                                    <span style="font-size:10px; font-weight:500;">{{ date('d M Y h:i A', strtotime($message->created_at)) }}</span>
                                </p>
                            </div>


                        @else
                            {{-- message from admin --}}
                            <div class="d-block text-right">
                                <p class="admin-chat-sender">
                                    {{ $message->message }}<br>
                                    <span style="font-size:10px; font-weight:500;">{{ date('d M Y h:i A', strtotime($message->created_at)) }}</span>
                                </p>
                            </div>
                        @endif
                        


                        @endforeach
                        {{-- end messages foreach --}}


                        

                    </div>



                    {{-- submit button --}}
                    <div id="user-chat-message-{{ $customer->id }}" class="row align-items-center user-chat-message" style="height:70px;">
                    
                        <div class="col-12" style="position: relative">
                            <input type="text" name="message" id="" class="form-control d-inline-block" style="width:100%" required="">
                    
                            <button class="btn btn-accent" style="position:absolute; right:12px; top:0px; height:37px;"><i
                                    class="fa fa-chevron-circle-right"></i></button>
                    
                        </div>
                    </div>

                </form>

                @endforeach
                {{-- end customer foreach --}}



            
            
            </div>
            {{-- end chats col --}}


        </div>
    </div>
</div>
{{-- end content --}}


@endsection
{{-- end content --}}








{{-- scripts --}}
@section('scripts')

{{-- jquery --}}
<script src="{{ asset('assets/admin/vendor/jquery.min.js') }}"></script>


{{-- all customers page --}}
<script src="{{ asset('assets/admin/js/all-customers-page.js') }}"></script>



{{-- chat page --}}
<script src="{{ asset('assets/admin/js/customer-chat.js') }}"></script>

@endsection
{{-- end scripts --}}