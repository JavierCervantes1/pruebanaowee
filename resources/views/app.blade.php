<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Sales</title>
</head>
<style>
  .btn-fixed{
    width: 10em;
    text-align: center;
    margin: auto;
    display: grid;
    margin-bottom: 20px;
    margin-top: 20px;
  }

  .autocenter{
    text-align: center;
    display: grid;
  }

  .automargin{
    margin: 5px;
  }

</style>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="nav navbar-nav nav-right">
          <li class="nav-item active">
            <a class="nav-link" href="#"> Sales <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/customers') }}">Customers</a>
          </li>
        </ul>
      </div>
    </nav><br>
    @include('flash-message')

    @yield('contenido')
</body>
</html>