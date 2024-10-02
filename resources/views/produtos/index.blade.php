@extends('main_template.index')
@section('main_template')

    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-6">
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">Produtos</h6>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Descrição</th>
                                <th scope="col">Preço</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($produtos as $linha)
                            <tr>
                                <td>{{ $linha->id }}</td>
                                <td>{{ $linha->produto_nome }}</td>
                                <td>{{ $linha->produto_desc }}</td>
                                <td>{{ $linha->produto_valor }}</td>
                                <td>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection