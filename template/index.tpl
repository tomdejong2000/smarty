<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1>twitter feed</h1>

{foreach $tweets as $tweet}
    <h2>{$tweet['titel']}</h2>
    <p>{$tweet['tekst']}</p>
{/foreach}

{*
<!--tweet posten-->
<form action="../create-tweet.php" method="post">
    <fieldset>
   <label>naam</label> <input type="text" name="naam"> <br/>
    <label>tekst</label> <textarea name="tekst"></textarea> <br/>
    <input type="submit">
    </fieldset>
</form>
*}
</body>
</html>