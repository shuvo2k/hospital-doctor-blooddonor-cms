
    <section class="navigation">
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
          <a class="navbar-brand" href="index.html">Navbar</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link" href="blood-admin.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="messagess.html">Message</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="{{ route('donor.create.message') }}">Create Message</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="blood-profile.html">Profile</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="setting.html">Setting</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="{{ route('signin') }}">Signin</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('signout') }}">Signout</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </section>
