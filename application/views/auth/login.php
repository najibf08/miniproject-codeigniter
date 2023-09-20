<!DOCTYPE html> 
<html lang="en"> 
 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Login</title> 
    <link rel="stylesheet" type="text/css" href="style.css"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 
    <style> 
    body { 
        top: 0; 
        left: 0; 
        margin: 0; 
        padding: 0; 
        font-family: 'Montserrat', sans-serif; 
    } 
 
 
 
    .full-bg { 
        background-image: url(https://majelisazzahir.org/uploads/logo/logo_637489041e46e1-82565541-96113185.png); 
        background-position: center center; 
        background-size: cover; 
        position: fixed; 
        top: 0; 
        left: 0; 
        height: 100vh; 
        width: 100vw; 
        z-index: -99; 
        transition: all 0.3s ease-in; 
    } 
 
    .container { 
        display: flex; 
        justify-content: center; 
        align-items: center; 
        height: 100%; 
    } 
 
    .card { 
        width: 350px; 
        background-color: rgba(255, 255, 255, 0.3); 
        border-radius: 15px; 
        padding: 40px; 
        backdrop-filter: blur(10px); 
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); 
    } 
 
    h2 { 
        color: #111; 
        text-align: center; 
        margin-bottom: 20px; 
    } 
 
    form { 
        display: flex; 
        flex-direction: column; 
    } 
 
    label { 
        color: #111; 
        margin-bottom: 5px; 
    } 
 
    input, 
    select, 
    option { 
        padding: 10px; 
        margin-bottom: 10px; 
        border: none; 
        border-radius: 5px; 
        background-color: rgba(255, 255, 255, 0.8); 
    } 
 
    button { 
        padding: 10px; 
        background-color: #fff; 
        color: #498ffc; 
        border: none; 
        border-radius: 5px; 
        cursor: pointer; 
    } 
 
    button:hover { 
        background-color: #70c1ff; 
    } 
 
    @media (max-width: 480px) { 
        .card { 
            width: 100%; 
            max-width: 350px; 
        } 
    } 
 
    a { 
        color: #498ffc; 
        /* Warna teks tautan */ 
        text-decoration: none; 
        /* Menghilangkan garis bawah tautan */ 
        font-weight: bold; 
        /* Ketebalan teks tautan */ 
    } 
 
    a:hover { 
        color: #70c1ff; 
        /* Warna teks tautan saat dihover */ 
    } 
 
    .login-link a { 
        color: #498ffc; 
        text-decoration: none; 
        font-weight: bold; 
    } 
 
    .login-link a:hover { 
        color: #70c1ff; 
    } 
    </style> 
</head> 
 
<body> 
    <div class="full-bg"> 
        <div class="container"> 
            <div class="card"> 
                <h2>Login</h2> 
                <form action="<?php echo base_url('auth/aksi_login'); ?>" method="post"> 
                    <label for="email">Email</label> 
                    <input type="text" id="email" placeholder="Enter your email" name="email"> 
                    <label for="password">Password</label> 
                    <input type="password" id="password" placeholder="Enter your password" name="password"> 
                    <a rel="noopener noreferrer" href="#" class="text-xs hover:underline dark:text-gray-400" 
                        style="color:red"><strong>Lupa Password?</strong></a> 
 
                    <button type="submit">Login</button> 
                </form> 
                <p style="text-align: center; margin-top: 10px;"> 
                    Belum Punya Akun? <a href="<?php echo base_url('auth/register'); ?>">Register</a> 
                </p> 
            </div> 
        </div> 
    </div> 
</body> 
 
</html>
