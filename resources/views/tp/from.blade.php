  <!DOCtype html>
<html>
    <head>
        <link  rel="stylesheet" href="{{asset("assets/css/bootstrap.min.css")}}">
        <link rel="stylesheet" href="style.css">
    </head>
    <body class="bg-info">
        <div class="container">
        <div class="row">
        <div class="col-md-3"></div>





         <form method="POST" action="{{route('ajouter')}}"  style="width:60%;margin-left:10%;border-raduis:100px;border:2px solid black;">
         @csrf

            <h1 class="text-center">mon formulaire </h1>
               </br>



            <label for="nom">nom</label>

            <input type="text"  name="nom" id="" class="form-control" placeholder="entrer votre nom"   required>
            <div class="invalid-feedback">
                Please enter a valid email addre.
              </div></br></br>
            <label for="nom">prenom</label>
            <input type="text"  name="prenom" id="" class="form-control" placeholder="entrer votre prenom"required></br></br>
            <label for="email">email</label>


            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">

              </div>
                <label for="pass">password</label>
        <input type="password"  name="pass" id="pass"   class="form-control" placeholder="entrer votre password" required></br></br>
        <label for="dateNaissance">date</label>
        <input type="date" name="dateNaissance" id=""   class="form-control" placeholder="entrer votre date" required></br></br>
           <select class= >
               <option value="CMR" selected="CMR">canada</option>
               <option value="CA" >nigeria</option>
               <option value="CD">gabon</option>
           </select></br></br>

           <div class="">
           <button type="submit" class="btn btn-dark">envoyer</button>
 
               <button type="reset" class="btn btn-danger" float="right">supprimer</button></br></br></br>
           </div>

        </from>

        <script src="{{asset("assets/js/bootstrap.min.js")}}">

        </script>


    </body>
</html>
