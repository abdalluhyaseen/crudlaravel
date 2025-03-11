<h1 style="text-align: center; font-family: Arial, sans-serif; color: #333;"> Create New Student </h1>

<form action="{{route('student.update',   $student->id)}}" method="POST" style="display: flex; flex-direction: column; align-items: flex-start; gap: 10px; width: 300px; margin: auto; padding: 20px; border: 1px solid #ccc; border-radius: 10px; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); background-color: #f9f9f9;">
     @method('PUT')
    @csrf
    <label for="name" style="font-size: 14px; font-weight: bold; color: #333;">Name:</label>
    <input type="text" id="name" name="name" value="{{$student->name}}" style="padding: 10px; font-size: 14px; width: 100%; border: 1px solid #ccc; border-radius: 5px;">

    <label for="email" style="font-size: 14px; font-weight: bold; color: #333;">Email:</label>
    <input type="email" id="email" name="email" value="{{$student->email}}" style="padding: 10px; font-size: 14px; width: 100%; border: 1px solid #ccc; border-radius: 5px;">

    <button type="submit" style="padding: 10px 20px; font-size: 14px; color: #fff; background-color: #007BFF; border: none; border-radius: 5px; cursor: pointer; transition: background-color 0.3s;">
      Update
    </button>
</form>
