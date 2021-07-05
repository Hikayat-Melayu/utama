<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Prototype</title>

        <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

        <script src='https://www.google.com/recaptcha/api.js'></script>
        @yield('style') 

    </head>
    <body>

        
        {{-- <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container-fluid">
               <a class="navbar-brand" href="/">Coin Souq</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Boss
                        </a>
                        <ul class="dropdown-menu dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><h6 class="dropdown-header">Benda</h6></li>     
                            <li><a class="dropdown-item"  href="/boss/accounts">Account</a></li>        
                            <li><a class="dropdown-item"  href="/boss/chains">Chain</a></li>                            
                            <li><a class="dropdown-item"  href="/boss/deposits">Deposit</a></li>                            
                            <li><a class="dropdown-item"  href="/boss/options">Option</a></li>  
                            <li><a class="dropdown-item"  href="/boss/order-books">Orderbook</a></li>   
                            <li><a class="dropdown-item"  href="/boss/orders">Order</a></li>   
                            <li><a class="dropdown-item"  href="/boss/pairs">Pair</a></li>   
                            <li><a class="dropdown-item"  href="/boss/tokens">Token</a></li>   
                            <li><a class="dropdown-item"  href="/boss/trades">Trade</a></li>   
                            <li><a class="dropdown-item"  href="/boss/users">User</a></li>   
                            <li><a class="dropdown-item"  href="/boss/wallets">Wallet</a></li>   
                            <li><a class="dropdown-item"  href="/boss/withdrawals">Withdrawal</a></li>   
                            <div class="dropdown-divider"></div>
                            <li><h6 class="dropdown-header">Data Model</h6></li>   
                            <li><a class="dropdown-item"  href="/organisations">Organisation</a></li>
                            <li><a class="dropdown-item" href="/users">User</a></li>
                        </ul>
                    </li>    
                   
                                       
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            System
                        </a>
                        <ul class="dropdown-menu dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><h6 class="dropdown-header">Personal</h6></li>                
                            <li><a class="dropdown-item" href="/boss/dashboard">Dashboard</a></li>
                            <li><a class="dropdown-item" href="/notifications">Notification</a></li>                                         
                            <li><a class="dropdown-item" href="/users/{{ Auth::user()->id  }}">Profile</a></li> 
                            <div class="dropdown-divider"></div> 
                            <li><a class="dropdown-item text-danger" href="/logout">Log Out</a></li>
                        </ul>
                    </li>                        
                   

                </ul>                           
              </div>
            </div>
        </nav>         --}}
                  

        <div class="container" style="min-height: 75rem;padding-top: 4.5rem;">
            <div class="row">
                @include('flash')
            </div>            
            @yield('content') 
        </div>        
        
        @yield('script') 
    </body>

</html>