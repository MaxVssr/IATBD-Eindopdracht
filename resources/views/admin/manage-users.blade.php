@extends('default')

@section('content')
    <a class="back-link" href="/manage">Terug naar beheerpagina</a>
    <section class="manage-user__section">
        <h2 class="manage-header">Beheer alle gebruikers</h2>
        <ul class="manage-list">
            <li class="manage-list__item">
                <article>
                    <section class="manage-list__item__container">
                        <p class="manage-list__item__value">Id</p>
                        <p class="manage-list__item__value">Naam</p>
                        <p class="manage-list__item__value">Status</p>
                        <p class="manage-list__item__action">Actie</p>
                    </section>
                </article>
            </li>
            @if(count($users) != 0)
                @foreach ($users as $user)
                    @if($user->role != 'Admin')
                        @include('admin.user-item')
                    @endif
                @endforeach
            @else
                <p class="no-users">Er zijn momenteel geen gebruikers.</p>
            @endif
        </ul>
    </section>
@endsection