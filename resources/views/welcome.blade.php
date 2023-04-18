<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Font Awesome -->
<link
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
rel="stylesheet"
/>
<!-- Google Fonts -->
<link
href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
rel="stylesheet"
/>
<!-- MDB -->
<link
href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css"
rel="stylesheet"
/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
    body{
        background-image: url('../../img/background.jpg')
    }
</style>

    <title>RH - PABSA</title>
</head>
<body>
    

   <div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-sm-12 col-lg-6 row shadow-sm">
            <div class="row justify-content-center bg-white pt-5 rounded mb-5">
                <div class="col-12 text-center">
                    <a href="https://www.grupopabsa.com">
                        <img src="../../img/logo.png" class="img-fluid" alt="PABSA">
                    </a>
                </div>
                <div class="col-12 text-center mt-4">
                    <h1>Envio de datos para  RH</h1>
                    @if (session('enviado'))
                    <div class="alert alert-success alert-sm h3">
                        {{session('enviado')}}
                    </div>
                        
                    @endif
                </div>
            <form action="{{route('rh')}}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="col-12">
                    <div class="row justify-content-center m-5">
                        <div class="col-12 h5 p-2">
                            Nombre Completo:
                        </div>
                        <div class="col-12 ">
                            <input type="text" name="nombre" class="form-control p-2" required>
                        </div>

                        <div class="col-12  h5 mt-4">
                            Teléfono:
                        </div>
                        <div class="col-12 ">
                            <input type="text" name="telefono" class="form-control p-2" required>
                        </div>

                        <div class="col-12  h5 mt-4">
                            Correo Eléctronico:
                        </div>
                        <div class="col-12 ">
                            <input type="email" name="email" class="form-control p-2" required>
                        </div>

                        <div class="col-12 h5 mt-4">
                            Edad:
                        </div>
                        <div class="col-12">
                            <input type="number" class="form-control p-2" name="edad" id="" required>
                        </div>

                        <div class="col-12 h5 mt-4">
                            Escolaridad:
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control p-2" name="escolaridad" required>
                        </div>


                        <div class="col-12 h5 mt-4">
                            Puesto al que desea postular:
                        </div>

                        <div class="col-12">
                            <input type="text" class="form-control p-2" name="puesto">
                        </div>

                        <div class="col-12 h5 mt-4">
                            Cuentanos sobre ti:
                        </div>
                        <div class="col-12">
                            <div class="form-group purple-border">
                                <textarea class="form-control" name="resumen" id="exampleFormControlTextarea4" rows="3"></textarea>
                                {{-- <a href="mailto:arturo.resendiz@grupopabsa.com">
                                    <i class="fa fa-envelope"></i>
                                    Enviar CV por correo
                                </a> --}}
                            </div>
                        </div>





     {{-- //Lo tuve que comentar por que PABSA no me va a autorizar un HOST de pago :( my heart hurts --}}
                        {{-- <div class="col-12 h5 mt-4">
                            Curriculum Vitae
                        </div>
                        <div class="col-12">
                            <input type="file" accept=".docx, .pdf, .doc" name="curriculum" class="form-control" required>
                        </div> --}}



                        
                        <div class="col-12 mt-5 mb-2 text-center">
                            <button class="btn btn-success">
                                Enviar Datos
                            </button>
                        </div>
                            ó
                        <div class="col-12 mt-1 text-center text-primary">
                            <i class="fa fa-envelope"></i>
                            <a href="mailto:l.dominguez@grupopabsa.com?cc=rh.auxiliar@grupopabsa.com">Envianos un correo electrónico</a>
                        </div>


                    </div>
                </div>
            </form>


            </div>
        </div>
    </div>
   </div>




    <!-- MDB -->
<script
type="text/javascript"
src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"
></script>
</body>
</html>