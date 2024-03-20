<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">


            <form action="{{ route('addvoiture') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="marque" class="form-label">marque</label>
                        <input type="text" class="form-control" id="marque" name="marque">
                    
                    <label for="modele" class="form-label">modele</label>
                        <input type="text" class="form-control" id="modele" name="modele">
                    
                        <label for="annne_fabrication" class="form-label">annee de fabrication</label>
                        <input type="text" class="form-control" id="annne_fabrication" name="annne_fabrication">
                    
                    <label for="description" class="form-label">description</label>
                        <textarea class="form-control" id="description" name="description"></textarea>

                    <label for="prix" class="form-label">prix</label>
                        <input type="number" class="form-control" id="prix" name="prix">
                    
                    <label for="image" class="form-label">image</label>
                        <input type="file" class="form-control" id="image" name="image">

                </div>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Submit</button>

        </form>
        </div>
      </div>
    </div>
  </div>