<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login - Kasir</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                        @if(session('pesan'))
                                        <div class="alert alert-success" role="alert">
                                           {{session('pesan')}} 
                                          </div>
                                        @endif
                                        
                                        @if($errors->any())
                                        <div class="alert alert-success" role="alert">
                                           Gagal Login
                                          </div>
                                        @endif
                                        <form method="POST">
                                            @csrf
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="username" type="text" name="username" placeholder=" Username" />
                                                <label for="username">Username</label>
                                                @error('username')
                                                <div class="form-text">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="password" type="password" name="password" placeholder=" Password" />
                                                <label for="password">Password</label>
                                                @error('password')
                                                <div class="form-text">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                            </div>
                                            <div class="mb-3">
                                                <button class="btn btn-outline-success form-control" type="submit">Login</button>
                                            </div>
                            
                                        </form>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
           
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
