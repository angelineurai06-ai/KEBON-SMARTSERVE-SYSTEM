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
            background-color: #f1f5f9;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        .page-container {
            display: flex;
            background: #ffffff;
            width: 100%;
            max-width: 850px;
            min-height: 500px;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.08);
        }

        .sidebar-panel {
            background: #143d22;
            width: 40%;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: #ffffff;
        }

        .sidebar-panel h1 {
            font-size: 26px;
            font-weight: 800;
            margin-bottom: 12px;
            letter-spacing: -0.5px;
            line-height: 1.2;
        }

        .sidebar-panel p {
            font-size: 14px;
            opacity: 0.85;
            line-height: 1.5;
        }

        .form-panel {
            width: 60%;
            padding: 50px 45px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .form-header h2 {
            font-size: 24px;
            color: #1e293b;
            margin-bottom: 6px;
        }

        .form-header p {
            font-size: 14px;
            color: #64748b;
            margin-bottom: 28px;
        }

        .form-group {
            margin-bottom: 18px;
        }

        .form-group label {
            display: block;
            font-size: 12px;
            font-weight: 600;
            color: #475569;
            margin-bottom: 6px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .form-group select, 
        .form-group input {
            width: 100%;
            padding: 12px 14px;
            font-size: 14px;
            background-color: #f8fafc;
            border: 1px solid #cbd5e1;
            border-radius: 8px;
            color: #1e293b;
            transition: all 0.2s ease;
            outline: none;
        }

        .form-group select:focus, 
        .form-group input:focus {
            background-color: #ffffff;
            border-color: #143d22;
            box-shadow: 0 0 0 4px rgba(20, 61, 34, 0.1);
        }

        .btn-submit {
            width: 100%;
            padding: 12px;
            font-size: 15px;
            font-weight: 600;
            color: #ffffff;
            background-color: #143d22;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.2s;
            margin-top: 10px;
        }

        .btn-submit:hover {
            background-color: #0b2414;
        }

        .alert-message {
            background-color: #fef2f2;
            border-left: 4px solid #ef4444;
            color: #991b1b;
            padding: 10px 14px;
            border-radius: 6px;
            margin-bottom: 20px;
            font-size: 13px;
        }

        .footer-link {
            margin-top: 24px;
            font-size: 13px;
            color: #64748b;
            text-align: center;
        }

        .footer-link a {
            color: #143d22;
            text-decoration: none;
            font-weight: 600;
        }

        .footer-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="page-container">
    <div class="sidebar-panel">
        <h1>KEBON<br>SMARTSERVE</h1>
        <p>Smart cafe workspace solution framework.</p>
    </div>

    <div class="form-panel">
        <div class="form-header">
            <h2>Register Account</h2>
            <p>Create your credentials to join our order ecosystem.</p>
        </div>

        @if($errors->any())
            <div class="alert-message">
                {{ $errors->first() }}
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
                <label for="username">Choose Username</label>
                <input type="text" name="username" id="username" placeholder="Create username" required autocomplete="off">
            </div>

            <div class="form-group">
                <label for="password">Choose Password</label>
                <input type="password" name="password" id="password" placeholder="Create password" required>
            </div>

            <button type="submit" class="btn-submit">Register Account</button>
        </form>

        <div class="footer-link">
            Already have an account? <a href="{{ route('login') }}">Log In Here</a>
        </div>
    </div>
</div>

</body>
</html>
