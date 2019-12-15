<div class="row mt-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="cart-title">
                        <h2>{{ $answerCount . " " . Str::plural('answer', $answerCount) }}</h2>
                    </div>
                    <hr>
                    
                    @include('layouts._messages')

                    @foreach($answers as $answer)
                            <div class="media">
                                <div class="d-flex d-flex-column vote-controls">
                                <a title="This question is useful" class="vote-up">
                                    <i class="fas fa-caret-up fa-3x"></i>
                                </a>
                                <span class="votes-count">1230</span>
                                <a title="This question is not useful" class="vote-down off" >
                                    <i class="fas fa-caret-down fa-3x"></i>
                                </a>
                                <a title="Click to mark as favorite question (Click again to undo) " class=" mt-2 vote-useful">
                                    <i class="fas fa-check fa-2x"></i>
                                </a>
                            </div>
                            <div class="media-body">
                                {!! $answer->body_html !!}
                                <div class="float-right">
                                    <span class="text-muted">
                                        Answered {{ $answer->created_date }}
                                        <div class="media mt-2">
                                            <a href="{{ $answer->user->url }}" class="pr-2">
                                                <img src="{{ $answer->user->avatar }}" alt="">
                                            </a>
                                            <div class="media-body mt-1">
                                                <a href="{{ $answer->user->url }}">{{ $answer->user->name }}</a>
                                            </div>
                                        </div>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>