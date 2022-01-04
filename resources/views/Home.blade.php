   <!DOCtype html>
<html>
    <head>
        <title>Liste des etudiants</title>
        <link  rel="stylesheet" href="{{asset("assets/css/bootstrap.min.css")}}">
    </head>
    <body>
        <h1 class="text-center">liste des etudiants</h1>
        <table  class="table table-striped m-2">
            <thead>
            <tr class="table-success">
                <th>Nom</th></br>
                <th>Prenom</th></br>
                <th>Date-naiss</th>
                <th>Pays</th>

            </tr>
            </thead>
            <tbody>
                @foreach ($data as $ligne )
    
    
                <tr>
                    <td>{{$ligne->nom}}</td>
                    <td>{{$ligne->Prenom}}</td>                    <th> {{$ligne->date}}</th>
                    <td>{{$ligne->pays}}</td>
                    </tr>
                    @endforeach
            </tbody>
            
        

        </table>
        <script src="{{asset("assets/js/bootstrap.min.js")}}">

        </script>


    </body>
</html>
