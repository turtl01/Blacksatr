<div class="main-content">
<form class="" action="/bd/update" method="post" name="bd">

<input type="hidden" name="_token" value="{{ csrf_token()}}">
    <div class="lol">
  @foreach ($item as $key => $value)

  <input type="text" name="{{$key}}" value="{{$value}}">


  @endforeach
</div>
  <button type="submit" value="Submit">Сохранить</button>

</form>
</div>
<style media="screen">
  .lol{
    display: flex;
    flex-direction: column;

  }
  body{
    background-color: white;
  }
  .delete{
    display: flex;
    width: 100%;
    max-width: 1350px;
    width: 100px;
  }
  .detach{
    display: flex;
    justify-content: center;
    padding: 5px;
    font-size: 20px;
    background-color: black;
    color: white;
    width: 100px;
    margin: 20px;

  }
  .main-content{
    width: calc(100% - 20px);
    max-width: 1350px;
    margin: 140px auto;
    height: 100%;

    padding:
  }
  .row{
    display: flex;
  }
  .new_element{
    display: flex;
    justify-content: center;
    padding: 5px;
    font-size: 20px;
    background-color: black;
    color: white;
    width: 100px;
    margin: 20px
  }
  .key{
    padding: 5px;
  }
</style>
