<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/payments.css') }}">
    <title>show payments</title>
</head>
<body>
 <section class="relative pt-10 pb-10 mt-20">
     <div class="container">
        <h2 class="btn btn-info  title">Show Payments</h2>

        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th class="bg-primary">id</th>
                    <th class="bg-dark">member_id</th>
                    <th class="bg-dark">amount</th>
                    <th class="bg-dark">paid_at</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($payments as $payment)
                    <tr>
                      <td class="bg-primary">{{$payment->id}}</td>
                      <td class="bg-dark">{{$payment->member->name}}</td>
                      <td class="bg-dark">{{$payment->amount}}</td>
                      <td class="bg-dark">{{$payment->paid_at}}</td>
                    </tr>
                        
                    @endforeach
                
                </tbody>
              </table>
          </div>
    </div>
 </section>
</body>
</html>