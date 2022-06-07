<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Painel de Controle') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <table class="table table-hover">
                        <thead>
                            <tr>
                            <th scope="col">Parada</th>
                            <th scope="col">Cliente</th>
                            <th scope="col">Peso</th>
                            <th scope="col">Data</th>
                            <th scope="col">Horário</th>
                            <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($coletas as $c)
                            <form action="/dashboard/{{ $c->id }}" method="POST">
                                @csrf
                                <tr>
                                    <th scope="row">{{ $c->parada }}</th>
                                    <td>{{ $users->name }}</td>
                                    <td>{{ $c->peso }} Kg</td>
                                    <td>{{ $c->data }}</td>
                                    <td>{{ $c->horario }}</td>
                                    <td>{{ $c->status }}</td>
                                    @if($c->status == "Aguardando Coleta")
                                        <td>
                                            <button class="btn btn-outline-success" type="submit">Coletar</button>
                                        </td>
                                    @elseif($c->status == "Aguardando Entrega")
                                        <td>
                                            <button class="btn btn-outline-danger" type="submit">Finalizar</button>
                                        </td>
                                    @endif
                                </tr>
                            </form>
                            @endforeach
                        </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
