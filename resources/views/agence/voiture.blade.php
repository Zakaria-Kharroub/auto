<!DOCTYPE html>
<html lang="en">
@include ('agence.layouts.headAgence')
<body>

    @include ('agence.layouts.asideAgence')


    


    <section class="dashboard">

       @include('agence.layouts.navbarAgence')

       <div class="dash-content">



        <div class="title">
            <i class="fa-solid fa-car"></i>
            <span class="text">Voitures</span>

        </div>


        <!-- button ajouter modal -->
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
          ajouter Voiture
        </button>



        <table class="activity-table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>img</th>
                    <th>prix</th>
                    <th>etat</th>
                    <th>action</th>
                </tr>
            </thead>

            <tbody>

               
                    <tr>
                        <td>2</td>
                        <td>dacia</td>
                        <td>img</td>
                        <td>2000</td>
                        <td>disponible</td>
                        <td class="d-flex">
                            <button type="button" class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#updateModal">update</button>
                            {{-- <form action="{{ route('deletevoiture', ['id' => $voiture->id]) }}" method="POST"> --}}
                            <form action="" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">delete</button>
                            </form>
                        </td>
                    </tr>






                    


        </tbody>
        </table>

     </div>
 </section>
     </section>



@include ('agence.layouts.modalAjouter')





<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>