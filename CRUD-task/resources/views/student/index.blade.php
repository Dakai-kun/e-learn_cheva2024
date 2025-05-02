<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Student</title>
</head>
<body>
    <div class="container">
        <h2>Student Management</h2>
        <a style="background-color:blue; border:none; padding:8px; border-radius:10px; margin: 0px 0px 10px 40px; text-align: center; color: white; text-decoration: none" href="/create">Create</a>
        <ul class="responsive-table">
          <li class="table-header">
            <div class="col col-1">NIM</div>
            <div class="col col-1">Name</div>
            <div class="col col-1">Mayor</div>
            <div class="col col-1">Year Entry</div>
            <div class="col col-1">Class</div>
            <div class="col col-1">action</div>
          </li>

          @foreach ($students as $student)
          
          <li class="table-row">
              <div class="col col-1" data-label="NIM">{{$student->nim}}</div>
              <div class="col col-1" data-label="Name">{{$student->name}}</div>
              <div class="col col-1" data-label="Mayor">{{$student->major}}</div>
              <div class="col col-1" data-label="Year Entry">{{$student->entry_year}}</div>
              <div class="col col-1" data-label="Class">{{$student->class}}</div>
              <div class="col col-1" data-label="Action">
                <div  style="background-color:yellow; border:none; padding:8px; border-radius:10px; margin-bottom: 10px; text-align: center;">
                    <a style="color: black; text-decoration: none" href="/edit/{{$student->id}}">Edit</a>
                </div>
                <div  style="background-color:red; padding:8px; border-radius:10px; text-align: center;">
                    <form action="/delete/{{$student->id}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button style="background: none;  border:none; color: white;" type="submit">Delete</button>
                    </form>
                </div>
              </div>
            </li>
            @endforeach
        </ul>
      </div>
</body>
</html>