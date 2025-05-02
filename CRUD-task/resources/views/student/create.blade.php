<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/create_edit.css">
    <title>Create Student</title>
</head>
<body>
    <div class="formbold-main-wrapper">
        <!-- Author: FormBold Team -->
        <!-- Learn More: https://formbold.com -->
        <div class="formbold-form-wrapper">
      
            <form action="{{ route('student.store') }}" method="POST">
              @csrf
            <div class="formbold-form-title">
              <h2 class="">Create Student</h2>
            </div>
            <div class="formbold-mb-3">
              <label for="nim" class="formbold-form-label">
                NIM
              </label>
              <input
                type="number"
                name="nim"
                id="nim"
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
                class="formbold-form-input"
              />
            </div>
            
            <button class="formbold-btn">Create</button>
          </form>
        </div>
      </div>
      <style>
      
      </style>
</body>
</html>