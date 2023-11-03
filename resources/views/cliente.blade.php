<style>
    .rojo {color:red}
</style>
<form method='post'>
@csrf


    <input type='text' name='name' value="{{$cli->name}}" placeholder="name"/>
    <span class="rojo">@error("name"){!!$message!!}@enderror</span>
    </br>
    <input type='text' name='apellido' value="{{$cli->apellido}}" placeholder="apellido"/>
    <span class="rojo">@error("apellido"){!!$message!!}@enderror</span>
    </br>
    <input type='text' name='edad' value="{{$cli->edad}}" placeholder="edad"/>
    <span class="rojo">@error("edad"){!!$message!!}@enderror</span>
    </br>
    <input type='text' name='deuda' value="{{$cli->deuda}}" placeholder="deuda"/>
    <span class="rojo">@error("deuda"){!!$message!!}@enderror</span>
    </br>
    <input type='submit' value="insertar"/><br>
     
@if ($errors->any())
    <div class="alert alert-danger">
        <ul class="rojo">
            @foreach ($errors->all() as $error)
                <li>{!! $error !!}</li>
            @endforeach
        </ul>
    </div>
@endif
 

</form>