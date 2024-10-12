<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido al Curso de Cloud Computing</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #4facfe, #00f2fe);
            color: white;
            text-align: center;
            padding: 50px;
        }
        .container {
            background: rgba(0, 0, 0, 0.7);
            padding: 20px;
            border-radius: 10px;
        }
        h1, h2 {
            color: #ffcb05;
        }
        .profile-img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
        }
        .icons a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
            font-size: 24px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Bienvenido al Curso de Cloud Computing</h1>
        <img src="https://via.placeholder.com/150" alt="Foto de perfil" class="profile-img">
        <h2><?php echo 'Tu Nombre'; ?></h2>
        <p><strong>Nombre de la Escuela:</strong> <?php echo 'Escuela XYZ'; ?></p>
        <p><strong>Carrera:</strong> <?php echo 'Tu Carrera'; ?></p>
        <p><strong>Semestre:</strong> <?php echo 'Tu Semestre'; ?></p>
        <div class="icons">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
        </div>
    </div>
</body>
</html>

