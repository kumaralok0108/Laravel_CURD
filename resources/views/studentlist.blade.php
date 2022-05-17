<html>
<head>
    <title>Student List</title>
   
</head>
<body>

<!-- Update query here is started -->

    <table border="1"   >
        <h3> Student List </h3>
        <tr>
                <td>ID</td>
                <td>First Name</td>
                <td>Email ID</td>
                <td>Phone Number</td>
                <td>Roll Number</td>
                <td>Id ID</td>
                <td>Action</td>
        </tr>
      
@foreach($laravel_curds as $laravel_curd)

        <tr>
                <td>{{$laravel_curd['id']}}</td>
                <td>{{$laravel_curd['student_name']}}</td>
                <td>{{$laravel_curd['email']}}</td>
                <td>{{$laravel_curd['phone_number']}}</td>
                <td>{{$laravel_curd['rollno']}}</td>
                <td>{{$laravel_curd['id_no']}}</td>
                <td>
                  <a href={{"datadel/".$laravel_curd['id']}} >Delete</a> | 
                  <a href={{"edit/".$laravel_curd['id']}} >Edit</a>
                 </td>
                 <td>
                
                 </td>
        </tr>
     @endforeach   
     </table>
<a href="http://127.0.0.1:8000/addUser">Click Here</a> to Go to Studient List Page
</form>   
</table>
<div>
{{$laravel_curds->links()}}

</div>
</body>
</html>

<style>
    .w-5{display:none;}
</style>