<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <title> make payment</title>
</head>

<body>
    <section class="relative pt-10 pb-10 mt-20">
        <div class="container">
            <h2>Add Payment</h2>
            <div class="control-payments" style="    display: flex;
						align-content: center;
						justify-content: center;
						align-items: center;margin: 1%;">
							<p class="text-muted mt-1 tx-13 mr-2 mb-0"> <a href="{{ url('/payments.makePayment') }}" class="btn btn-success">MAKE PAYMENT</a></p>
						<p class="text-muted mt-1 tx-13 mr-2 mb-0"> <a href="{{ url('/payments.showPayments') }}" class="btn btn-warning">SHOW  PAYMENTS</a></p>
						</div>
            <form method="POST" action="{{ url('/storePayment') }}">
                @csrf
                <div class="form-group">
                    <label for="member_id">Member:</label>
                    <select class="form-control" id="member_id" name="member_id">
                        @foreach ($members as $member)
                            <option value="{{ $member->id }}">{{ $member->name }}: {{$member->email}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="amount">Amount:</label>
                    <input type="number" class="form-control" id="amount" name="amount"  step="any" required>
                    {{-- I want to add float numbers : i added :  step="any" attribute   --}}
                </div>

                <div class="form-group">
                    <label for="paid_at">Paid At:</label>
                    <input type="date" class="form-control" id="paid_at" name="paid_at" max="{{ date('Y-m-d') }}" required>
                    {{-- To disable future day selection I added att: max="{{ date('Y-m-d') }}"  --}}
                </div>

                <button type="submit" class="btn btn-primary">Add Payment</button>
            </form>

        </div>
    </section>
 

</html>

</body>

</html>
