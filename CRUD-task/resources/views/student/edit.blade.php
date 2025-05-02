<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/create_edit.css">
    <title>Edit Student</title>
</head>
<body>
    <div class="formbold-main-wrapper">
        <!-- Author: FormBold Team -->
        <!-- Learn More: https://formbold.com -->
        <div class="formbold-form-wrapper">
      
            <form action="{{ route('student.update', $student->id) }}" method="POST">
              @csrf

              @method('PUT')
            <div class="formbold-form-title">
              <h2 class="">Edit Student</h2>
            </div>
            <div class="formbold-mb-3">
              <label for="nim" class="formbold-form-label">
                NIM
              </label>
              <input
                type="number"
                name="nim"
                id="nim"
                value="{{$student->nim}}"
                class="formbold-form-input"
              />
            </div>
      
            <div class="formbold-mb-3">
              <label for="name" class="formbold-form-label">
                Name
              </label>
              <input
                type="text"
                name="name"
                id="name"
                value="{{$student->name}}"
                class="formbold-form-input"
              />
            </div>

            <div class="formbold-mb-3">
              <label for="major" class="formbold-form-label">
                Major
              </label>
              <input
                type="text"
                name="major"
                id="major"
                value="{{$student->major}}"
                class="formbold-form-input"
              />
            </div>

            <div class="formbold-mb-3">
              <label for="entry_year" class="formbold-form-label">
                Year Entry
              </label>
              <input
                type="number"
                name="entry_year"
                id="entry_year"
                value="{{$student->entry_year}}"
                class="formbold-form-input"
              />
            </div>

            <div class="formbold-mb-3">
              <label for="class" class="formbold-form-label">
                Class
              </label>
              <input
                type="text"
                name="class"
                id="class"
                value="{{$student->class}}"
                class="formbold-form-input"
              />
            </div>
            
            <button class="formbold-btn">Edit</button>
          </form>
        </div>
      </div>
      <style>
      
      </style>
</body>
</html>