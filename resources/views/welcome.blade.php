<html>
<head>
    <title>Student List</title>

</head>
<body>

<!-- Update query here is started -->
    <form action="addUser" method="POST">
        @csrf
    <table>
        <h3> Student Registration Firm </h3>
        <tr>
            <td>First Name : </td>
            <td><input type="text" name="student_name" id="student_name" value = "" > </td>
        </tr>

        <tr>
            <td>Email ID: </td>
            <td><input type="text" name="email" id="email" value = ""> </td>
        </tr>

        <tr>
            <td>Phone Number: </td>
            <td><input type="text" name="phone_number" id="phone_number" value = ""> </td>
        </tr>

        <tr>
            <td>Roll Number : </td>
            <td><input type="text" name="rollno" id="rollno" value = ""> </td>
        </tr>
        <tr>
            <td>Id ID : </td>
            <td><input type="text" name="id_no" id="emailid" value = ""> </td>
        </tr>


        <tr>
            <td colspan="2" style="padding: 0 30px;">
             <input type="submit" name="submit" value="Save Data" style="float: right;">
            </td>
        </tr>

</table>
<a href="http://127.0.0.1:8000/listUser">Click Here</a> to Go to Studient List Page
</form>
</table>
</body>
</html>
