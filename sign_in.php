<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Sign In</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  
  <style>
    body {
      background-color: rgb(5, 5, 5);
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }

    .login-box {
      background-color: #fff;
      border: 1px solid #ccc;
      border-radius: 5px;
      width: 580px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }

    .modal-header {
      background-color: black;
      color: white;
      padding: 10px 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      border-bottom: 1px solid #ccc;
    }

    .modal-header h5 {
      margin: 0;
    }

    .modal-body {
      display: flex;
      padding: 20px;
    }

    .right-side {
      width: 100%;
    }

    .modal-footer {
      display: flex;
      justify-content: space-between;
      padding: 15px 20px;
      background-color: #f1f1f1;
      border-top: 1px solid #ccc;
    }

    .btn-signin {
      background-color: #5cb85c;
      color: white;
    }

    .btn-cancel {
      border: 1px solid #3b8cd7;
      color: #3b8cd7;
    }

    .form-text {
      font-size: 0.875em;
      color: #666;
    }

    .link-area {
      margin-top: 10px;
      font-size: 0.9em;
    }

    .link-area a {
      text-decoration: none;
      color: #0d6efd;
    }
  </style>
</head>
<body>

<?php
  // Handle form submission
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    echo "<script>alert('Email: $email\\nPassword: $password');</script>";
    // Here you can add database check or redirect logic
  }
?>

<div class="login-box">
  <div class="modal-header">
    <h5>Sign in</h5>
    <button type="button" class="btn-close btn-close-white" aria-label="Close"></button>
  </div>

  <div class="modal-body">
    <div class="right-side">
      <form method="POST" action="">
        <div class="mb-3">
          <label for="email" class="form-label text-danger fw-bold">*Email:</label>
          <input type="email" class="form-control" name="email" id="email" placeholder="Email address..." required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label fw-bold">Password:</label>
          <input type="password" class="form-control" name="password" id="password" placeholder="Password...">
          <div class="form-text">Leave blank for no password</div>
        </div>
        <div class="link-area">
          <a href="#">Forgot your password?</a> | <a href="#">Create a new account</a>
        </div>
      
        <div class="modal-footer">
          <button type="reset" class="btn btn-cancel">Cancel</button>
          <button type="submit" class="btn btn-signin">Sign in</button>
        </div>
      </form>
    </div>
  </div>
</div>

</body>
</html>
