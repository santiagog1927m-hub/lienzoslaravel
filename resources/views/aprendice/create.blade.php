<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aprendice create</title>
</head>
<body>
<h1>formulario aprendice</h1>

<form action="{{route('aprendice.store')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    Nombre
    <br>
    <input type="text" name="name">
</label>
<br>
<br>
<label>
    Email:
    <br>
    <input type="text" name="email">
</label>
<br>
<br>
<label>
    Numero celular:
    <br>
    <input type="number" name="cell number">
</label>
<br>
<br>

{{-- {{$courses}} --}}

<label for="course_id">Area</label>

    <select name="course_id" id="user_id" class="form-control">
        <option value="">Seleccione un curso</option>

        @foreach($courses as $courses)
            <option value="{{ $course->id }}">
                {{ $course->name }}
            </option>
        @endforeach
    </select>
    <br>
    <br>


    {{-- {{$computers}} --}}

<label for="computer_id">Computer</label>

    <select name="computer_id" id="user_id" class="form-control">
        <option value="">Seleccione un computador</option>

        @foreach($computers as $computer)
            <option value="{{ $computer->id }}">
                {{ $computer->name }}
            </option>
        @endforeach
    </select>
    <br> 
    <br> 



<button type="submit">Enviar Formulario:</button>
</form>


</body>
</html>