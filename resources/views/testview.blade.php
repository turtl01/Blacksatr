<script>
  $( document ).ready(function() {
    $('.new_element').on('click', function(r){

      $.post('/Testcontroller/add', {"_token": "{{ csrf_token() }}", name:"yan", pole1:"pudge", pole2:"positicai 5" }).done(function(ans){
        let otvet = JSON.parse(ans);
        let element = otvet.pop();
        let prehtml = '';
        $.each(element, function( index, value ) {
          console.log( prehtml );
          prehtml = prehtml + '<div class = "key2">'+ index + '</div><div class = "value2">'+ value +'</div>';
        });
        let html = '<div class = "row">'+ prehtml +'</div>';
        //$( ".main-content" ).append( html );

        $(document).find('.row').last().after(html);
        console.log(html);


      });
    });
    $('.detach').on('click', function(r){
      $.post('/Testcontroller/delete', {"_token": "{{ csrf_token() }}", id:"153"}).done(function(ans){});
    });
  });
</script>


<div class="main-content">
    @foreach($test as $key => $value)
      <div class="row">

        @foreach ($value as $key2 => $value2)

          <div class="key2">
            <div>{{$key2}}</div>
          </div>
          <div class="value2">
            <div>{{$value2}}</div>
          </div>
        @endforeach
      </div>
    @endforeach
    <div class="new_element">
      добавить
    </div>
    <form action="/Testcontroller">
        <label for="id">Веддите айди</label>
        <input type="text" name="id" value="" placeholder="id">
    </form>
    <div class="detach">
        удалить
    </div>
</div>



<style media="screen">
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
