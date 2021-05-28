@extends('layouts.index')


@section('content')
    <div class="d-flex justify-content-between">
        <h1>Bienvenu le site</h1> 
        <form action="{{route('search')}}" class="d-inline" method="GET">
            {{-- @csrf --}}
            <input type="text" name="q"/> 
            <input type="submit" value="Chercher">
        </form>
    </div> 

    <table class="mt-3 table table-striped text-center">
        <tr>
            <td>#</td>
            <td>Nom</td>
            <td>Prénom</td>
            <td>Email</td>
        </tr>
        @if (count($users) <= 0)
            <tr>
                <td colspan="4" class="text-center">
                    <p>pas de résultats...</p>
                </td>
            </tr>
        @else            
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->nom }} </td>
                    <td>{{ $user->prenom }} </td>
                    <td>{{ $user->email }} </td>
                </tr>
            @endforeach
        @endif
    </table>

@endsection