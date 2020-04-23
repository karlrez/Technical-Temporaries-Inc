<?php include 'header2.php'; ?>

<body>
  <div class="container">
    <div class="jumbotron">
      <h1 class="display-4">Technical Temporaries Inc</h1>
      <p class="lead">Welcome! Please enter credentials below</p>
      <hr class="my-4">

      <!--login form-->
      <form action="index.php" method="post">
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value='admin@tti.com'>
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" value='12345'>
        </div>
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Remember me</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div class="container">

  <?php include 'footer.php'; ?>