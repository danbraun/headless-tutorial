<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">More Exercises</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="ex2.php">Exercise 2</a>
              <a class="dropdown-item" href="ex3.php">Exercise 3</a>
              <a class="dropdown-item" href="ex4.php">Exercise 4</a>
              <a class="dropdown-item" href="ex5.php">Exercise 5</a>
              <a class="dropdown-item" href="ex6.php">Exercise 6</a>
              <a class="dropdown-item" href="ex7.php">Exercise 7</a>
              <a class="dropdown-item" href="ex8.php">Exercise 8</a>
              <a class="dropdown-item" href="ex9.php">Exercise 9</a>
              <a class="dropdown-item" href="ex10.php">Exercise 10</a>

            </div>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input name="search" class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search"
          data-bind="value: search">
          <button id="searchButton" class="btn btn-outline-success my-2 my-sm-0" type="button" data-bind="click: letsGo">Search</button>
        </form>
      </div>
    </nav>