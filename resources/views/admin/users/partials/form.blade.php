<div class="form-group">
    {!! Form::label('name', 'Título') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Título del post']) !!}

    @error('name')
        <small>{{ $message }}</small>
    @enderror

</div>

<div class="form-group">
    {!! Form::label('slug', 'Apodo') !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Apodo del post', 'readonly']) !!}
    @error('slug')
        <small>{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('category_id', 'Categoría') !!}
    {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    <p class="font-weight-bold">Etiquetas</p>
    @foreach ($tags as $tag)
        <label class="mr-2">
            {!! Form::checkbox('tags[]', $tag->id, null) !!}
            {{ $tag->name }}
        </label>
    @endforeach
    <br>
    @error('tags')
        <small>{{ $message }}</small>
    @enderror
</div>

<div class="form-group">

    <p class="font-weight-bold">Estado</p>
    <label>
        {!! Form::radio('status', 1, true) !!}
        Borrador
    </label>
    <br>
    <label>
        {!! Form::radio('status', 2, false) !!}
        Publicado
    </label>

</div>

<div class="row">
    <div class="col">
        <div class="image-wraper mb-3">
            @isset ($post->image)
                <img id="picture" src="{{ Storage::url($post->image->url) }}" alt="">
            @else
                <img id="picture" src="https://cdn.pixabay.com/photo/2015/05/22/05/52/cat-778315__340.jpg" alt="">
            @endisset

        </div>
    </div>
    <div class="col">
        <div class="form-group">
            {!! Form::label('file', 'Imagen del post') !!}
            {!! Form::file('file', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}
        </div>

        @error('file')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum possimus totam cupiditate
            reprehenderit, sint qui dolore exercitationem necessitatibus repellendus ipsum et facere magnam
            perferendis debitis quam similique facilis distinctio dicta!</p>
    </div>
</div>
<div class="form-group">
    {!! Form::label('extract', 'Extracto') !!}
    {!! Form::textarea('extract', null, ['class' => 'form-control']) !!}
    @error('extract')
        <small>{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('body', 'Post') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
    @error('body')
        <small>{{ $message }}</small>
    @enderror
</div>
