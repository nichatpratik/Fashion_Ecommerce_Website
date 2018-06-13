<!DOCTYPE html>
<html>
<head>
    <title>Card &ndash; the better way to collect credit cards</title>
    <meta name="viewport" content="initial-scale=1">
</head>
<body>
    <style>
        .demo-container {
            width: 100%;
            max-width: 350px;
            margin: 50px auto;
        }
        form {
            margin: 30px;
        }
        input {
            width: 200px;
            margin: 10px auto;
            display: block;
        }
    </style>
	
    <div class="">
        <div class="card-wrapper"></div>

        <div class="form-container active">
            <form action="">
                <input placeholder="Card number" type="text" name="number">
                <input placeholder="first-name" type="text" name="name">
                <input placeholder="MM/YY" type="text" name="expiry">
                <input placeholder="CVC" type="text" name="cvc">
            </form>
        </div>
    </div>

   
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
		<script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/121761/card.js'></script>
		<script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/121761/jquery.card.js'></script>
		<script type="text/javascript" src="js/index.js"></script>
</body>
</html>