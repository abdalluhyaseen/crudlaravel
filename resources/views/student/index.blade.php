<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>student</title>
</head>
<body>
<h1 style="text-align: center; font-family: Arial, sans-serif; color: #333;">Show All Students</h1>

<div style="display: flex; justify-content: space-between; align-items: center; margin: 20px auto; width: 80%;">
    <button style="padding: 10px 20px; font-size: 14px; color: #fff; background-color: #28a745; border: none; border-radius: 5px; cursor: pointer; text-transform: uppercase; transition: background-color 0.3s;">
        <a href="{{ route('student.create') }}" style="text-decoration: none; color: #fff;">Add New</a>
    </button>
</div>

<table style="width: 80%; margin: auto; border-collapse: collapse; text-align: left; font-family: Arial, sans-serif; border: 1px solid #ddd;">
    <thead style="background-color: #f8f9fa;">
        <tr>
            <th style="padding: 10px; border: 1px solid #ddd; color: #333;">#</th>
            <th style="padding: 10px; border: 1px solid #ddd; color: #333;">Name</th>
            <th style="padding: 10px; border: 1px solid #ddd; color: #333;">Email</th>
            <th style="padding: 10px; border: 1px solid #ddd; color: #333;">Postal_Code</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($students as $student)
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;">{{ $student->id }}</td>
                <td style="padding: 10px; border: 1px solid #ddd;">{{ $student->name }}</td>
                <td style="padding: 10px; border: 1px solid #ddd;">{{ $student->email }}</td>
                <td style="padding: 10px; border: 1px solid #ddd;">{{ $student->Postal_Code ? $student->postal_Code->postal_code : "No postal code available" }}</td>
                <td style="padding: 10px; border: 1px solid #ddd;"><a href="{{route('student.edit',$student->id)}}">edit</a></td>
                <td style="padding: 10px; border: 1px solid #ddd;">
                    <form action="{{ route('student.destroy',$student->id) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit">delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>


</body>
</html>
