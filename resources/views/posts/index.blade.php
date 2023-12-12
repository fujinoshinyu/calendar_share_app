<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<title>Calendar</title>
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
      </head>
      <body>
          <h1>CalendarShareApp</h1>
            <a href='/posts/create'>CalendarCreate</a>
                @foreach ($posts as $post) <div class='post'>
                    <div class='posts'>
                        <h2 class='title'>
                            <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                        </h2>
                        <p class='body'>{{ $post->body }}</p> </div>
                        <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="button" onclick="deletePost({{ $post->id }})">delete</button>
                            </form>

                    </div>
                @endforeach
                <script>
function deletePost(id) {
'use strict'
if (confirm('削除すると復元できません。\n本当に削除しますか?')) { 
    document.getElementById(`form_${id}`).submit();
} 
    
}
</script>

      </body>
  </html>