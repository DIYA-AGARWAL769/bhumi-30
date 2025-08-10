<?php
// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name     = $_POST['name'] ?? '';
    $email    = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $confirm  = $_POST['confirm'] ?? '';

    $errors = [];

    // Simple validation
    if (empty($email) || empty($password) || empty($confirm)) {
        $errors[] = "Email and Password fields are required.";
    }
    if ($password !== $confirm) {
        $errors[] = "Passwords do not match.";
    }
    if (strlen($password) < 8) {
        $errors[] = "Password must be at least 8 characters.";
    }

    if (empty($errors)) {
        // In real app: Save to database (hashed password recommended)
        echo "<div class='alert alert-success text-center'>Registration successful!</div>";
        // Reset values (for demo purposes)
        $name = $email = $password = $confirm = '';
    } else {
        echo "<div class='alert alert-danger'><ul>";
        foreach ($errors as $error) {
            echo "<li>" . htmlspecialchars($error) . "</li>";
        }
        echo "</ul></div>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Register a New Account</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <style>
    body {
      background-color: rgba(0, 0, 0, 0.898);
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }
    .register-box {
      background-color: white;
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
    .modal-body {
      padding: 20px;
    }
    .form-label {
      font-weight: bold;
    }
    .form-text {
      font-size: 0.875em;
      color: #666;
    }
    .form-note {
      font-size: 0.9em;
      margin-top: 10px;
    }
    .modal-footer {
      display: flex;
      justify-content: space-between;
      padding: 15px 20px;
      background-color: #f1f1f1;
      border-top: 1px solid #ccc;
    }
    .btn-create {
      background-color: #5cb85c;
      color: white;
    }
    .btn-cancel {
      border: 1px solid #3b8cd7;
      color: #3b8cd7;
    }
    .info-section {
      font-size: 0.9em;
      margin-top: 15px;
      border-top: 1px dotted #aaa;
      padding-top: 10px;
    }
    .info-section ul {
      padding-left: 20px;
    }
    .info-section a {
      text-decoration: none;
    }
  </style>
</head>
<body>

<div class="register-box">
  <div class="modal-header">
    <h5>Register a new account</h5>
    <button type="button" class="btn-close btn-close-white" aria-label="Close"></button>
  </div>

  <div class="modal-body">
    <form method="POST" action="">
      <div class="mb-3">
        <label for="name" class="form-label">Name:</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Name..." value="<?php echo htmlspecialchars($name ?? '') ?>">
      </div>
      <div class="mb-3">
        <label for="email" class="form-label text-danger">*Email:</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Email address..." value="<?php echo htmlspecialchars($email ?? '') ?>">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label text-danger">*Password:</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password...">
        <div class="form-text">Must be at least 8 characters</div>
      </div>
      <div class="mb-3">
        <label for="confirm" class="form-label text-danger">*Confirm password:</label>
        <input type="password" class="form-control" id="confirm" name="confirm" placeholder="Repeat password...">
      </div>
      <div class="form-note">
        <a href="#">Already have an account?</a>
      </div>
      <div class="info-section">
        <h6>Why register with worldtimezones?</h6>
        <ul>
          <li>Customize content & units without losing your settings</li>
          <li>Access your settings from any computer</li>
          <li>Add your own events to calendars</li>
          <li>When you register, you consent to our <a href="#">terms and conditions</a></li>
        </ul>
        <p class="text-muted">NOTE: Your email address will not be shared, and we won't send you any spam. Read more in our <a href="#">privacy policy</a></p>
      </div>
  </div>

  <div class="modal-footer">
    <button type="reset" class="btn btn-cancel">Cancel</button>
    <button type="submit" class="btn btn-create">Create Account</button>
  </div>
  </form>
</div>

</body>
</html>
