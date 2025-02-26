<h1>My Homepage</h1>

@if(isset($name))
    <p>Hello, {{$name}}! your age = {{$age}}</p>
    <h2>These are your posts</h2>
    @foreach ($posts as $post)
        <p>{{$post}}</hr></p>
    @endforeach
@else 
    <p>Hello, stranger!</p>
@endif

