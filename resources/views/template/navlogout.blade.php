<div class="wrapper1">
    <div class="logo"><a href="">SIOPA</a>
    </div>
    <div class="menu">
        <ul>
            @if (auth()->user()->level=="admin")

            <li><a href="{{ route('satu') }}">

                <button type="button" herf= "/logout" class="btn btn-link logintbl" data-toggle="modal" name="logouttbl"
                    data-target="#logout"> Admin Dasboard  |
                </button></a>
            </li>
            @endif

            <li><a href="{{ route('dua') }}">
                <button type="button" herf= "/logout" class="btn btn-link logintbl" data-toggle="modal" name="logouttbl"
                    data-target="#logout"> Jelajahi !
                </button></a>
            </li>

            <li><a href="#">
                <button type="button" herf= "/logout" class="btn btn-link logintbl" data-toggle="modal" name="logouttbl"
                    data-target="#logout"> |
                </button></a>
            </li>
            <li>
                <div class="dropdown">
                    <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ auth()->user()->name }}
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="bd-versions">
                        <li><a class="dropdown-item current" aria-current="true" href="{{ route('logout') }}"> Logout</a></li>
                        <li><hr class="dropdown-divider"></li>
                    </ul>
                </div>
            </li>
            {{-- <li><a href="{{ route('logout') }}">
                <button type="button" herf= "/logout" class="btn btn-link logintbl" data-toggle="modal" name="logouttbl"
                    data-target="#logout"> Logout
                </button></a>
            </li> --}}
        </ul>
    </div>
    <div class="titlee">Sistem Informasi ORMAWA FMIPA</div>
    <p><a href="https://www.instagram.com/" class="instagram"><i class="fab fa-instagram"></i>
        </a></p>
    <p><a href="https://web.facebook.com/" class="facebook"><i class="fab fa-facebook-square"></i>
        </a></p>
    <p><a href="https://twitter.com/" class="twitter"><i class="fab fa-twitter"></i></a></p>
</div>

<!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="exampleModal logout" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        ...
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
    </div>
    </div>
</div>