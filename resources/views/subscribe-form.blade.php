<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Подписка</title>
</head>
<style>
.window1{
    width: 100vw;
    height: 100vh;
    /* border:2px solid black; */
    display:flex;
    justify-content: center;
    align-items: center;

}
.window2{
    width:300px;
    height: 300px;
    /* border:2px solid black; */
    display:flex;
    justify-content: center;
    align-items: center;
    text-align:center;
}
#btn{width: 98%;}

</style>
<body>
<a href="/"><button class="btn btn-outline-primary btn-sm" >Вернуться на главную</button></a> 
 
 <div class="window1">
    <div class="window2">
        <div>
 @if(!$isValid)
<form  action="/subsctibe" method="POST">
    <h3>Оформление подписки</h3>
@csrf
@error('login')
<p style="color:red">{{$message="Не корректный логин !!!"}}</p>
@enderror
<input type="text"  name="login" class="form-control" placeholder="login" value="{{old('login')}}"/></br>
@error('email')
<p style="color:red">{{$message="Не корректный Email !!!"}}</p>
@enderror
<input type="text" class="form-control" name="email" placeholder="email" value="{{old('email')}}"/></br>
@error('phone')
<p style="color:red">{{$message="Не корректныйномер телефона!!!"}}</p>
@enderror
<input tupe="text" name="phone" class="form-control" placeholder="phone" value="{{old('phone')}}"/></br>
<button class="btn btn-primary" id="btn">Подписаться</button>
</form>
@else
<h1>Подписка оформленна</h1>
@endif     
</div> 
</div> 
<div>     
</body>
</html>