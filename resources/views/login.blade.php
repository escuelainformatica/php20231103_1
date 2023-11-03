<style>
    .rojo {
        color: red
    }
</style>
<form method='post'>
    @csrf
    <input type='text' name='email' value="{{ $usuario->email }}" placeholder="email" /><br>
    <input type='text' name='password' value="" placeholder="password" /><br>
    </br>
    <input type='submit' value="login" /><br>
    <div class="rojo">
    {{$mensaje}}
    </div>
</form>
