@extends('layouts.appmaster')
@section('title', 'Login Page')
@section('content')
<!-- Display all the Data Validation Rule Errors -->
<?php
    if($errors->count() != 0)
    {
        echo "<h5>List of Errors</h5>";
        foreach($errors->all() as $message)
        {
            echo $message . "<br/>";
        }
    }
?>

    <!-- Note Shown: Insert your Login Form from login.php Here -->
<form action = "/dologin3" method = "POST">
		<input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
		<table>
			<tr>
				<td>Username: </td>
				<td><input type = "text" name = "username" /></td>
			</tr>

			<tr>
				<td>Password:</td>
				<td><input type = "text" name = "password" /></td>
			</tr>
			<tr>
				<td colspan = "2" align = "center">
					<input type = "submit" value = "Login" />
				</td>
		</table>
	</form>

@endsection
