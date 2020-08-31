<div class="main-content">

    @foreach($test as $key => $value)
      <div class="row">

        @foreach ($value as $key2 => $value2)

          <div class="key2">
            <div>{{ $key2 }}</div>
          </div>
          <div class="value2">
            <div>{{ $value2 }}</div>
          </div>

        @endforeach

        <div class="button5">
          <div class="delete">
            <a href="/bd/del/{{$value['id']}}">Удалить</a>
          </div>

          <div class="update">
            <a href="/bd/edit/{{$value['id']}}">Редактировать</a>
          </div>
        </div>

      </div>
    @endforeach

    <a href="/bd/create">Создать</a>


</div>
<style media="screen">
  .row{
    border: 1px solid rgb(19 18 18);
    margin: 5px;
    display: flex;
    justify-content: space-between;
  }
  .delete{
    margin: 0px 1px;
  }
  .update{
    margin: 0px 1px;
  }
  .value2{
    margin: 0px 5px;
  }
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
