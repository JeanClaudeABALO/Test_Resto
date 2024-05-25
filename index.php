<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>

.main-page{
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
      }
      .header{
        background-color: rgb(2,1,61);
        color: #fff;
      }
      
    </style>

  </head>
  <body>

      <nav class="navbar navbar-expand-lg bg-body-tertiary">
          <div class="container">
            <a class="navbar-brand" href="#">TP Bootstrap</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Acceil</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Test</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" aria-disabled="true">Inactif</a>
                </li>
              </ul>
              <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                  <a class="nav-link" href="#">Se Connecter</a>
                </li>
                  <div class="me-3"></div>
                <li class="nav-item">
                  <a href="#" class="btn btn-success">S'inscrire</a>
                </li>
              </ul>      
            </div>
          </div>
      </nav>

      <section class="header text-center p-5" >
         <div class="container">
          <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt et adipisci amet! Voluptatum ducimus labore expedita eveniet!</span>
          <button type="button" class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#exampleModal">Souscrire</button>
         </div>
                                              <!-- Button trigger modal -->
                        
                        </button>            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog text-dark">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                <button
                                 type="button" 
                                 class="btn-close" 
                                 data-bs-dismiss="modal" 
                                 aria-label="Close" 
                                  data-bs-toggle="tooltip" 
                                  data-bs-placement="bottom" 
                                  title="Femer le popup">
                                </button>
                              </div>
                              <div class="modal-body">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore omnis a adipisci fugit labore cupiditate vel
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                              </div>
                            </div>
                          </div>
            </div>


                        <!-- Modal -->
            
      </section>

        <section class="main-page py-5">
          <div class="container">
            <div class="row h-100 justify-content-center align-items-center">
              <div class="col-lg-6">
                <img src="assets/image.avif" class="img-fluid" alt="" />
              </div>
              <div class="col-lg-6">
                <h1 class="p-5">Lorem ipsum dolor sit amet consectetur</h1>
                <p class="p-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem quibusdam veritatis omnis quasi fugit culpa, sapiente, reprehenderit, dolores nesciunt consectetur reiciendis suscipit quo commodi porro facilis quod nihil fugiat nam.</p>
                <form class="p-5">
                      <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Adresse" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <button class="input-group-text btn btn-primary">S'inscrire</button>
                      </div>
                </form>
              </div>
            </div>
          </div>
        </section>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script>
            const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
            const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
    </script>
  </body>
</html> 