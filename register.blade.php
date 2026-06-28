<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kebon SmartServe - Register</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background: linear-gradient(135deg, #f5f7fa 0%, #e4e8f0 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .register-container {
            background: #ffffff;
            padding: 40px;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            width: 100%;
            max-width: 420px;
            text-align: center;
        }

        .logo-placeholder {
            font-size: 24px;
            font-weight: 800;
            color: #2e7d32;
            margin-bottom: 8px;
            letter-spacing: -0.5px;
        }

        .logo-subtitle {
            font-size: 14px;
            color: #6c757d;
            margin-bottom: 32px;
        }

        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }

        .form-group label {
            display: block;
            font-size: 13px;
            font-weight: 600;
            color: #495057;
            margin-bottom: 8px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .form-group select, 
        .form-group input {
            width: 100%;
            padding: 12px 16px;
            font-size: 15px;
            background-color: #f8f9fa;
            border: 1px solid #dee2e6;
            border-radius: 8px;
            color: #212529;
            transition: all 0.2s ease-in-out;
            outline: none;
        }

        .form-group select:focus, 
        .form-group input:focus {
            background-color: #ffffff;
            border-color: #2e7d32;
            box-shadow: 0 0 0 4px rgba(46, 125, 50, 0.1);
        }

        .btn-submit {
            width: 100%;
            padding: 14px;
            font-size: 16px;
            font-weight: 600;
            color: #ffffff;
            background-color: #2e7d32;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.2s ease;
            margin-top: 10px;
        }

        .btn-submit:hover {
            background-color: #1b5e20;
        }

        .alert-message {
            padding: 12px;
            border-radius: 6px;
            margin-bottom: 20px;
            font-size: 14px;
            text-align: left;
        }

        .alert-danger {
            background-color: #fff5f5;
            border-left: 4px solid #e53e3e;
            color: #c53030;
        }

        .alert-success {
            background-color: #f0fff4;
            border-left: 4px solid #38a169;
            color: #276749;
        }

        .login-prompt {
            margin-top: 24px;
            font-size: 14px;
            color: #6c757d;
            border-top: 1px solid #eee;
            padding-top: 20px;
        }

        .login-prompt a {
            color: #2e7d32;
            text-decoration: none;
            font-weight: 600;
            margin-left: 4px;
        }

        .login-prompt a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="register-container">
    <div class="logo-placeholder">KEBON SMARTSERVE</div>
    <div class="logo-subtitle">Create your account to get started.</div>

    @if($errors->any())
        <div class="alert-message alert-danger">
            {{ $errors->first() }}
        </div>
    @endif

    @if(session('success'))
        <div class="alert-message alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('register.process') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="role">Register As</label>
            <select name="role" id="role" required>
                <option value="Customer">Customer</option>
                <option value="Staff">Staff</option>
                <option value="Admin">Admin</option>
            </select>
        </div>

        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" placeholder="Choose a username" required autocomplete="off">
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Create a password" required>
        </div>

        <button type="submit" class="btn-submit">Register Account</button>
    </form>

    <div class="login-prompt">
        Already have an account? <a href="{{ route('login') }}">Log In Here</a>
    </div>
</div>

</body>
</html>
