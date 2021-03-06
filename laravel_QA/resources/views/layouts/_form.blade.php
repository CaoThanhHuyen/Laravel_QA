@csrf
    <div class="form-group">
        <label for="" >Question Title</label>
        <input type="text" value="{{ old('title', $question->title) }}" name="title" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" >

        @if($errors->has('title'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('title') }}</strong>
            </div>
        @endif
    </div>
     <div class="form-group">
        <label for="" >Explain you question</label>
        <textarea name="body" id="" cols="30" rows="10" class="form-control {{ $errors->has('body') ? 'is-invalid' : '' }}">{{ old('body', $question->body) }}</textarea>

        @if($errors->has('body'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('body') }}</strong>
            </div>
        @endif
    </div>
     <div class="form-group">
        <button class="btn btn-outline-info btn-lg">{{ $button }}</button>
</div>