<?php 
    // Base de datos

    require '../../includes/config/databases.php';
    $db = conectarDB();

    //  Consultar para obtener los vendedores
    $consulta = "SELECT * FROM vendedores";
    $resultado = mysqli_query($db, $consulta);
    
    // Arreglo con mensajes de errores
    $errores = [];

    $titulo = '';
    $precio = '';
    $descripcion = '';
    $habitaciones = '';
    $wc = '';
    $estacionamiento = '';
    $vendedorId = '';
    
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        // echo "<pre>";
        // var_dump($_POST);
        // echo "</pre>";
        
        $titulo = $_POST['titulo'];
        $precio = $_POST['precio'];
        $descripcion = $_POST['descripcion'];
        $habitaciones = $_POST['habitaciones'];
        $wc = $_POST['wc'];
        $estacionamiento = $_POST['estacionamiento'];
        $vendedorId = $_POST['vendedor'];
        $creado = date('Y/m/d');

        if(!$titulo){
            $errores[] = "Debes añadir un titulo";
        }

        if(!$precio){
            $errores[] = 'El precio es obligatorio';
        }

        if(strlen($descripcion) < 50){
            $errores[] = 'La descripcion es obligatoria y debe tener al menos 50 caracteres';
        }
        
        if(!$habitaciones){
            $errores[] = 'El numero de habitaciones es obligatorio';
        }
        if(!$wc){
            $errores[] = 'El numero de baños es obligatorio';
        }
        if(!$estacionamiento){
            $errores[] = 'El numero de lugares de estacionamiento es obligatorio';
        }
        if(!$vendedorId){
            $errores[] = 'Elige un vendedor';
        }

        // echo "<pre>";
        // var_dump($errores);
        // echo "</pre>";

        //Revisar que el arreglo de errores este vacio
        if(empty($errores)){

            // insertar en la base de datos
            $query = " INSERT INTO propiedades(titulo, precio, descripcion, habitaciones, wc, estacionamiento, creado,
            vendedores_id ) VALUES ( '$titulo', '$precio', '$descripcion', '$habitaciones', ' $wc', '$estacionamiento', '$creado', '$vendedorId' )";
    
            // echo $query;
    
            $resultado = mysqli_query($db, $query);
    
            if($resultado){
                // Redireccionar al usuario

                header('Location: /admin');
            }
        }


    }
    
    require '../../includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Crear</h1>

        <?php foreach($errores as $error) : ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
        <?php endforeach; ?>

        <a href="/admin" class="boton boton-verde">Volver</a>

        <form class="formulario" method="POST" action="/admin/propiedades/crear.php">
            <fieldset>
                <legend>Informacion General</legend>

                <label for="titulo">Titulo:</label>
                <input type="text" id="titulo" name="titulo" placeholder="Titulo Propiedad" value="<?php echo $titulo; ?> ">

                <label for="precio">Precio:</label>
                <input type="number" id="precio" name="precio" placeholder="Precio Propiedad"value="<?php echo $precio; ?> ">

                <label for="imagen">Imagen:</label>
                <input type="file" id="imagen" accept="imagen/jpeg, image/png" nanme="imagen">

                <label for="descripcion">Descripcion:</label>
                <textarea id="descripcion" name="descripcion"><?php echo $descripcion; ?></textarea>
            </fieldset>

            <fieldset>
                <legend>Informacion Propiedad</legend>

                <label for="habitaciones">Habitaciones:</label>
                <input 
                type="number" 
                id="habitaciones" 
                name="habitaciones" 
                placeholder="Ej: 3" 
                min="1" 
                max="9" 
                value="<?php echo $habitaciones; ?> ">

                <label for="habitaciones">Baños:</label>
                <input type="number" id="wc" name="wc" placeholder="Ej: 3" min="1" max="9" value="<?php echo $wc; ?> ">

                <label for="habitaciones">Estacionamiento:</label>
                <input type="number" id="estacionamiento" name="estacionamiento" placeholder="Ej: 3" min="1" max="9" value="<?php echo $estacionamiento; ?> ">

            </fieldset>

            <fieldset>
                <legend>Vendedor</legend>
            
                <select name="vendedor">
                    <option value="">-- Seleccione --</option>
                    <?php while($vendedor = mysqli_fetch_assoc($resultado)) : ?>
                        <option   <?php echo $vendedorId === $vendedor['id'] ? 'selected' : ''; ?>   value="<?php echo $vendedor['id']; ?>"><?php echo $vendedor['nombre'] . " " . $vendedor['apellido']; ?></option>
                    <?php endwhile; ?>
                </select>
            </fieldset>

            <input type="submit" value="Crear Propiedad" class="boton boton-verde">

        </form>
    </main>

 <?php 
    incluirTemplate('footer');
?>