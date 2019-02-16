<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MCRC Email Letter </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

</head>
<body style="margin: 0; padding: 0">

    <table>
        <tr>
            <td>
                Hello
            </td>
        </tr>
    </table>

	<h5 class="text-center"><strong>MCR</strong> <strong style=" color: #F96332;">Consult</strong></h5>
	<hr width="25%" style="border: 1px solid #F96332;" >

    <h5 style=" color: #F96332;"> Name of the Person Who Sent The Mail </h5>
    <p>{{ $name }}</p>
    <br>

    <h5 style=" color: #F96332;"> The Person's E-Mail </h5>
    <p>{{ $email }}</p>

    <h5 style=" color: #F96332;"> Subject of The Message </h5>
    <p>{{ $subject }}</p>


    <h5 style=" color: #F96332;"> The Message from the Person </h5>
    <p>{{ $bodymessage }}</p>


</body>
</html>