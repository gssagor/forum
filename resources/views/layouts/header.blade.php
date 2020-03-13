<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow" id="menu">
    <h5 class="my-0 mr-md-auto font-weight-normal"><a style="text-decoration:none;" href="/">StuckInAI</a></h5>
    <nav class="my-2 my-md-0 mr-md-3">
        <form role="form" id="form-buscar">
            <div class="form-group">
                <div class="input-group">
                    <input id="1" class="form-control" type="text" name="search" placeholder="Search..." required />
                    <span class="input-group-btn">
                        <button class="btn btn-success" type="submit">
                            <i class="glyphicon glyphicon-search" aria-hidden="true"></i> Search
                        </button>
                    </span>
                </div>
            </div>
        </form>
    </nav>
    <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="/question/create">Ask Question</a>
        <a class="p-2 text-dark" href="/questions">Browse Questions</a>
        <a class="p-2 text-dark" href="/datasets">Datasets</a>
        <a class="p-2 text-dark" href="/dataset/create">Add Data</a>
    </nav>
    @guest
        <a class="btn btn-outline-primary" href="/login">Sign in</a>
    @else
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                <img width="25" class="profile-image" src="/default/avatar.png" alt="">
            </a>
            
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <h5 style="text-transform:capitalize" class="profile-block-padding">
                    {{ Auth::user()->name }} <span class="caret"></span>
                </h5>
                <p style="color:#777" class="profile-block-padding">
                    {{ Auth::user()->email }}
                </p>
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
    @endguest
</div>