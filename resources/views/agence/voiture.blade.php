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
                    <th>marque</th>
                    <th>modele</th>
                    <th>img</th>
                    <th>prix</th>
                    <th>disponibilite</th>
                    <th>action</th>
                </tr>
            </thead>

            <tbody>

              @foreach ($voitures as $voiture)
                    <tr >
                        <td>{{ $voiture->id }}</td>
                        <td>{{ $voiture->marque }}</td>
                        <td>{{ $voiture->modele }}</td>
                        <td><img src="storage/images/{{ $voiture->image }}" alt="" width="50px"></td>
                        <td>{{ $voiture->prix }}</td>
                        <td>{{ $voiture->disponibilite }}</td>
                        <td class="">
                          <div class="d-flex">

                            <button type="button" class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{ $voiture->id }}">
                              modifier
                            </button>
                              

                            <form action="" method="POST">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-danger">delete</button>
                          </form>

                          </div>
                            

                            
                        </td>
                    </tr>








                    {{-- modal update --}}

                    <div class="modal fade " id="staticBackdrop{{ $voiture->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Modifier Voiture</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body ">
                      
                      
                              <form action="{{ route('updatevoiture', $voiture->id) }}" method="POST" enctype="multipart/form-data">
                                  @csrf
                                  @method('PUT')
                                  <div class="mb-3">
                                      <label for="marque" class="form-label">marque</label>
                                          <input type="text" class="form-control" id="marque" name="marque" value="{{ $voiture->marque }}">
                                      
                                      <label for="modele" class="form-label">modele</label>
                                          <input type="text" class="form-control" id="modele" name="modele" value="{{ $voiture->modele }}">
                                      
                                          <label for="annne_fabrication" class="form-label">annee de fabrication</label>
                                          <input type="text" class="form-control" id="annne_fabrication" name="annne_fabrication" value="{{ $voiture->annne_fabrication }}">
                                      
                                      <label for="description" class="form-label">description</label>
                                          <textarea class="form-control" id="description" name="description">{{ $voiture->description }}</textarea>
                      
                                      <label for="prix" class="form-label">prix</label>
                                          <input type="number" class="form-control" id="prix" name="prix" value="{{ $voiture->prix }}">
                                        
                                      <label for="disponibilite" class="form-label mt-3">disponibilite</label>
                                          <select class="form-select" name="disponibilite" id="disponibilite">
                                              <option value="oui">oui</option>
                                              <option value="non">non</option>
                                          </select>
                                      
                                      <label for="image" class="form-label">image</label>
                                          <input type="file" class="form-control" id="image" name="image">
                      
                                  </div>

                                  <button type="submit" class="btn btn-primary">Submit</button>

                              </form>

                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>


                    

                @endforeach






                    


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