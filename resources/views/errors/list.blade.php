@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Kujdes!</strong> Korrigjoni gabimet me poshte.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

