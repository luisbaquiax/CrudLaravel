<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <script src="https://kit.fontawesome.com/6d0db64a1f.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="bg-dark">
<div class="container mt-3">
    <div class="card bg-dark" style="box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-info m-2" data-bs-toggle="modal" data-bs-target="#exampleModal"
                style="font-size: 25px">
            Agregar nuevo estudiante
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="validate-form" action="{{ route('addEstudiante') }}"
                              method="post">
                            @csrf
                            <h1 class="login100-form-title mb-3 text-center">
                                <strong>Registro de nuevo estudiante</strong>
                            </h1>

                            <div class="row">
                                <div class="col">
                                    <div
                                        class="wrap-input100 validate-input"
                                    >
                                        <span class="label-input100">Primer nombre</span>
                                        <input
                                            class="form-control"
                                            type="text"
                                            name="nombre1"
                                            id="name1"
                                            required
                                        />
                                    </div>

                                    <div
                                        class="wrap-input100 validate-input"
                                    >
                                        <span class="label-input100">Segundo nombre</span>
                                        <input
                                            class="form-control"
                                            type="text"
                                            name="nombre2"
                                            id="name2"
                                            required
                                        />
                                    </div>

                                    <div
                                        class="wrap-input100 validate-input"
                                    >
                                         <span class="label-input100"
                                         >Primer apellido</span
                                         >
                                        <input
                                            class="form-control"
                                            type="text"
                                            name="apellido1"
                                            id="apellido1"
                                            required
                                        />
                                    </div>

                                    <div
                                        class="wrap-input100 validate-input"
                                    >
                                        <span class="label-input100"
                                        >Segundo apellido</span
                                        >
                                        <input
                                            class="form-control"
                                            type="text"
                                            name="apellido2"
                                            id="apellido2"
                                            required
                                        />
                                    </div>
                                </div>

                                <div class="col">
                                    <div
                                        class="wrap-input100 validate-input"
                                    >
                                        <span class="label-input100">Dirección</span>
                                        <input
                                            class="form-control"
                                            type="text"
                                            name="direccion"
                                            id="direccion"
                                            required
                                        />
                                    </div>

                                    <div
                                        class="wrap-input100 validate-input"
                                    >
                                        <span class="label-input100">Teléfono</span>
                                        <input
                                            class="form-control"
                                            type="text"
                                            name="telefono"
                                            id="telefono"
                                            minlength="8"
                                            maxlength="8"
                                            required
                                        />
                                    </div>

                                    <div
                                        class="wrap-input100 validate-input"
                                        data-validate="Correo valido, ejemplo: ex@abc.xyz"
                                    >
                                        <span class="label-input100">Correo eléctronico</span>
                                        <input
                                            class="form-control"
                                            type="text"
                                            name="correo"
                                            id="correo"
                                            required
                                        />
                                    </div>

                                </div>
                            </div>

                            <div class="mb-3 mt-3">
                                <button
                                    class="btn btn-info w-100"
                                    style="font-size: 25px"
                                    type="submit"
                                >
                                    Guardar cambios
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <table class="table table-dark">
            <h4 class="text-center text-white">Estudiantes</h4>
            <thead>
            <tr>
                <th scope="col">Carné</th>
                <th scope="col">Nombres</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Dirección</th>
                <th scope="col">Teléfono</th>
                <th scope="col">Correo</th>
                <th scope="col">Acción</th>
            </tr>
            </thead>
            <tbody>
            @foreach($estudiantes as $estudiante)
                <tr>
                    <td>{{ $estudiante->id }}</td>
                    <td>{{ $estudiante->nombre1 }} {{ $estudiante->nombre2 }}</td>
                    <td>{{ $estudiante->apellido1 }} {{ $estudiante->apellido2 }} </td>
                    <td>{{ $estudiante->direccion }}</td>
                    <td>{{ $estudiante->telefono }}</td>
                    <td>{{ $estudiante->correo }}</td>
                    <td>
                        <a class="btn btn-info" data-bs-toggle="modal"
                           data-bs-target="#editModal{{ $estudiante->id }}"><i
                                class="fa-solid fa-pen-to-square"></i></a>

                        <!-- Modal -->
                        <div class="modal fade" id="editModal{{ $estudiante->id }}" tabindex="-1"
                             aria-labelledby="editModal{{ $estudiante->id }}Label" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="validate-form text-dark" action="{{ route('editEstudiante', $estudiante->id) }}"
                                              method="post">
                                            @csrf
                                            <h1 class="login100-form-title mb-3 text-center">
                                                <strong>Edición de estudiante</strong>
                                            </h1>

                                            <div class="row">
                                                <div class="col">
                                                    <div
                                                        class="wrap-input100 validate-input"
                                                    >
                                                        <span class="label-input100">Primer nombre</span>
                                                        <input
                                                            class="form-control"
                                                            type="text"
                                                            name="nombre1"
                                                            id="ename1"
                                                            required
                                                            value="<?= $estudiante->nombre1 ?>"
                                                        />
                                                    </div>

                                                    <div
                                                        class="wrap-input100 validate-input"
                                                    >
                                                        <span class="label-input100">Segundo nombre</span>
                                                        <input
                                                            class="form-control"
                                                            type="text"
                                                            name="nombre2"
                                                            id="ename2"
                                                            required
                                                            value="<?= $estudiante->nombre2 ?>"
                                                        />
                                                    </div>

                                                    <div
                                                        class="wrap-input100 validate-input"
                                                    >
                                                     <span class="label-input100"
                                                     >Primer apellido</span
                                                     >
                                                        <input
                                                            class="form-control"
                                                            type="text"
                                                            name="apellido1"
                                                            id="eapellido1"
                                                            required
                                                            value="<?= $estudiante->apellido1 ?>"
                                                        />
                                                    </div>

                                                    <div
                                                        class="wrap-input100 validate-input"
                                                    >
                                                    <span class="label-input100"
                                                    >Segundo apellido</span
                                                    >
                                                        <input
                                                            class="form-control"
                                                            type="text"
                                                            name="apellido2"
                                                            id="eapellido2"
                                                            required
                                                            value="<?= $estudiante->apellido2 ?>"
                                                        />
                                                    </div>
                                                </div>

                                                <div class="col">
                                                    <div
                                                        class="wrap-input100 validate-input"
                                                    >
                                                        <span class="label-input100">Dirección</span>
                                                        <input
                                                            class="form-control"
                                                            type="text"
                                                            name="direccion"
                                                            id="edireccion"
                                                            required
                                                            value="<?= $estudiante->direccion ?>"
                                                        />
                                                    </div>

                                                    <div
                                                        class="wrap-input100 validate-input"
                                                    >
                                                        <span class="label-input100">Teléfono</span>
                                                        <input
                                                            class="form-control"
                                                            type="text"
                                                            name="telefono"
                                                            id="etelefono"
                                                            minlength="8"
                                                            maxlength="8"
                                                            required
                                                            value="<?= $estudiante->telefono ?>"
                                                        />
                                                    </div>

                                                    <div
                                                        class="wrap-input100 validate-input"
                                                        data-validate="Correo valido, ejemplo: ex@abc.xyz"
                                                    >
                                                        <span class="label-input100">Correo eléctronico</span>
                                                        <input
                                                            class="form-control"
                                                            type="text"
                                                            name="correo"
                                                            id="ecorreo"
                                                            required
                                                            value="<?= $estudiante->correo ?>"
                                                        />
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="mb-3 mt-3">
                                                <button
                                                    class="btn btn-info w-100"
                                                    style="font-size: 25px"
                                                    type="submit"
                                                >
                                                    Guardar cambios
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a class="btn btn-info" href="{{ route('eliminarEstudiante', $estudiante->id) }}"><i
                                class="fa-solid fa-trash-can"></i></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
</body>
</html>
