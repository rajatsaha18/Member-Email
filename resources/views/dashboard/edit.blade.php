<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Hello, world!</h1>
    <section class="py-5">
        <div class="container">
            <a href="{{ route('dashboard') }}" class="btn btn-success">Dashboard</a>
            <div class="row">

                <div class="col-md-6">
                    <div class="card card-body">
                        <form action="{{ route('member.approved',$member->id) }}" method="POST">
                            @csrf
                            <div class="from-group">
                                <label for="">Name</label>
                                <input type="text" value="{{ $member->name }}" name="name" class="form-control">
                            </div>
                            <div class="from-group">
                                <label for="">email</label>
                                <input type="email" value="{{ $member->email }}" name="email" class="form-control">
                            </div>
                            <div class="from-group">
                                <label for=""></label>
                                <input type="submit" class="btn btn-success" value="Approved">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
