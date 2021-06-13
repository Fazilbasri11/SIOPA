<div class="modal fade "  id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog " role="document">
            <div class="modal-content popup1">
                <div class="modal-header kepalapop1">
                    <h5 class="modal-title judulpop1" id="exampleModalLabel">Login Dengan Akun SIMPEG/KRS</h5>
                </div>
                <div class="modal-body">
                    <form action="{{ route('postlogin') }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group" style="color: white;">
                            <label for="exampleInputEmail1">NPM</label>
                            <input type="text" class="form-control" name="NPM" {{-- id="exampleInputEmail1"
                                aria-describedby="emailHelp" --}} placeholder="Masukkan NPM">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password KRS</label>
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                                    placeholder="Password">
                            </div>
                            <button type="submit" class="btn btn-primary masukpop">Masuk</button>
                    </form>
                </div>

            </div>
        </div>
    </div>