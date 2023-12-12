<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8"> <title>CalendarShareApp</title>
      </head>
      <body>
<h1>YourName</h1>
<form action="/posts" method="POST">
              @csrf
              <div class="title">
                  <h2>カレンダーtitle</h2>
<input type="text" name="post[title]" placeholder="タイトル"/> </div>
              <div class="body">
                  <h2>カレンダーbody</h2>
<textarea name="post[body]" placeholder="今日も1日お疲れさまでした。"></textarea> </div>
<input type="submit" value="store"/> </form>
<div class="footer">
<a href="/">戻る</a>
          </div>
          <script>
function deletePost(id) {
'use strict'
if (confirm('削除すると復元できません。\n本当に削除しますか?')) { document.getElementById(`form_${id}`).submit();
} }
</script>

      </body>
</html>