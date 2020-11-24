@extends('layouts.admin')

@section('content')
    <section>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                ENVIAR ARQUIVO
        </button>
        <hr>
    </section>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Assunto</th>
            <th scope="col">Data</th>
            <th scope="col">Download</th>
        </tr>
        </thead>
        <tbody>

        <tr>
            <th scope="row">asdas</th>
            <td>Mark</td>
            <td>Otto</td>

        </tr>

        </tbody>
    </table>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Enviar Arquivos</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('file.upload') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="assunto">Assunto</label>
                            <input type="text" name="assunto" class="form-control" id="assunto" aria-describedby="emailHelp" placeholder="Informe o assunto">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Arquivos</label>
                            <input type="file" name="files[]" class="form-control" id="fil" multiple>
                        </div>

                        <button type="submit" class="btn btn-success btn-block">ENVIAR</button>

                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
