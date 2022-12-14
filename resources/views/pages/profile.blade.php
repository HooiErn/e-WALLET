<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/0ea31885d1.js" crossorigin="anonymous"></script>
     <!-- Styles -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="{{ asset('css/profile.css') }}" rel="stylesheet">
    <title>Profile</title>
</head>
<body>
    <div class="container">
        <div class="profile">
            <div class="top-icon">
                <div>
                   <a href="home"><i class="fas fa-arrow-left" style="color:white;"></i></a> 
                </div>
                <div>
                    <h3>Profile</h3>
                </div>
                <div>
                <a href="{{route('logout')}}" onclick="return confirm('Are you sure you want to logout?')"><i class="fa fa-solid fa fa-right-to-bracket"  style="color:white;"></i></a>
                </div>
            </div>

            @foreach($users as $user)
            <div class="top-profile">
            <h2>  {{ $user->username }}</h2>
        </div>
<!-- Wallet -->
            <div class="card mt-3">
                <div class="card-header" style="padding-bottom:0px;">
                    <h6 style="color:black; float:left;">My Wallet</h6>
                    <br>
                </div>

                <div class="wallet-content">
                    <div class="column">
                    <p>Account</p>
                    <a href="#" style="color:#00D100;">Active</a> 
                    </div>
                
                <div class="column">
                    <p>RM {{number_format($user ->balance/100,2)}}</p>
                    <a href="#" style="color:grey;">MY Balance</a>
                </div>

                <div class="column" style="border-right:none !important;">
                    <p>Payment</p>
                    <a href="#" style="color:grey;">Payment Option</a>  
                </div>
                </div>
            </div>
            @endforeach
           
    <br>
    <div class="card" >
    <div class="option-content">
        <table>
            <tbody>
               <tr>
                <td class="column" style="height:72px;padding-top:25px;">
                    <a href="{{route('view.transactionHistory')}}">Transactions</a> 
                </td>
                <td class="column" style="height:72px;padding-top:25px;">
                    <a href="#">Help</a> 
                </td>
                <td class="column" style="height:72px;border-right:none !important;">
                    <a href="#">Chat with Customer Service</a>  
                </td>
</tr>
</tbody>
                </div>
                
            </div>
        </div>
    </table>

    </div>
</div>
</body>
</html>