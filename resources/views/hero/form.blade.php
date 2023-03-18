<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('real_name') }}
            {{ Form::text('real_name', $hero->real_name, ['class' => 'form-control' . ($errors->has('real_name') ? ' is-invalid' : ''), 'placeholder' => 'Real Name']) }}
            {!! $errors->first('real_name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hero_name') }}
            {{ Form::text('hero_name', $hero->hero_name, ['class' => 'form-control' . ($errors->has('hero_name') ? ' is-invalid' : ''), 'placeholder' => 'Hero Name']) }}
            {!! $errors->first('hero_name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('image') }}
            {{ Form::text('image', $hero->image, ['class' => 'form-control' . ($errors->has('image') ? ' is-invalid' : ''), 'placeholder' => 'Image']) }}
            {!! $errors->first('image', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('info') }}
            {{ Form::text('info', $hero->info, ['class' => 'form-control' . ($errors->has('info') ? ' is-invalid' : ''), 'placeholder' => 'Info']) }}
            {!! $errors->first('info', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>