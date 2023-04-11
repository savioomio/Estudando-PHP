<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>


    <form action="dados.php" method="$_POST">
        <label for="customRange3" class="form-label">Qual e sua idade?</label>
        <input type="number" class="form-range" min="0" max="5" step="0.5" name="idade" id="customRange3">
        <button type="submit">enviar</button>
        
        
        
        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modelId">
            Launch
          </button>
          
          <!-- Modal -->
          <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
              <div class="modal-dialog" role="document">
                  <div class="modal-content">
                          <div class="modal-header">
                                  <h5 class="modal-title">Sua idade!</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                      </button>
                              </div>
                      <div class="modal-body">
                          <div class="container-fluid">
                              <img src="samoieda.gif"  width="100" alt="">
                              <p><?php  ?></p>
                          </div>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">fecha</button>
                          <button type="button" class="btn btn-primary">Savar</button>
                      </div>
                  </div>
              </div>
          </div>
          

    </form>




          <script>
              $('#exampleModal').on('show.bs.modal', event => {
                  var button = $(event.relatedTarget);
                  var modal = $(this);
                  // Use above variables to manipulate the DOM
                  
              });
          </script>
    <!-- Button trigger modal -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>