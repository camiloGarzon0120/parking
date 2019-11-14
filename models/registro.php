 <?php
require_once "conexion.php";
class Datos extends Conexion{

    #REGISTRO DE USUARIOS
    #---------------------------------
    public function registroUsuarioModel($datosModel,$tabla){

        $stmt = Conexion::conectar()->prepare(" INSERT INTO $tabla (idUsuario, nombre, apellido, celular, email, usuario, clave) VALUES (:idUsuario, :nombre, :apellido, :celular, :email, :usuario, :clave)");

        $stmt->bindParam(":idUsuario",$datosModel["identificacion"],PDO::PARAM_BIGINT);
        $stmt->bindParam(":nombre",$datosModel["nombre"],PDO::PARAM_STR);
        $stmt->bindParam(":apellido",$datosModel["apellido"],PDO::PARAM_STR);
        $stmt->bindParam(":celular",$datosModel["telefono"],PDO::PARAM_STR);
        $stmt->bindParam(":email",$datosModel["apellido"],PDO::PARAM_STR);
        $stmt->bindParam(":usuario",$datosModel["usuario"],PDO::PARAM_STR);
        $stmt->bindParam(":clave",$datosModel["clave"],PDO::PARAM_STR);

        if($stmt->execute()){

            return "succes";
        }else{

            return "error";
        }

        $stmt->close();
    }

   
    // #VISTA DE USUARIOS
    // #---------------------------------
    // public function vistaUsuariosModel($tabla){

    //     $stmt = Conexion::conectar()->prepare("SELECT id, usuario, password, email FROM $tabla");
    //     $stmt->execute();
    //     return $stmt->fetchAll();
    //     $stmt->close();
    // }

    // #EDITAR USUARIOS
    // #---------------------------------
    // public function editarUsuarioModel($datosModel,$tabla){

    //     $stmt = Conexion::conectar()->prepare("SELECT id, usuario, password, email FROM $tabla WHERE id = :id");

    //     $stmt->bindParam(":id",$datosModel,PDO::PARAM_INT);
    //     $stmt->execute();

    //     return $stmt->fetch();

    //     $stmt->close();
    // }


    // #ACTUALIZAR USUARIOS
    // #---------------------------------
    // public function actualizarUsuarioModel($datosModel,$tabla){

    //     $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET  usuario = :usuario, password = :password, email = :email  WHERE id = :id");

    //     $stmt->bindParam(":usuario",$datosModel["usuario"],PDO::PARAM_STR);
    //     $stmt->bindParam(":password",$datosModel["password"],PDO::PARAM_STR);
    //     $stmt->bindParam(":email",$datosModel["email"],PDO::PARAM_STR);
    //     $stmt->bindParam(":id",$datosModel["id"],PDO::PARAM_INT);
    //     if($stmt->execute()){

    //         return "succes";

    //     }else{

    //      return "error";

    //     }

    //     $stmt->close();
    // }

    // #BORRAR USUARIOS
    // #---------------------------------
    // public function borrarUsuarioModel($datosModel,$tabla){

    //     $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");

    //     $stmt->bindParam(":id",$datosModel,PDO::PARAM_INT);
    //     if($stmt->execute()){

    //         return "succes";

    //     }else{

    //      return "error";

    //     }

    //     $stmt->close();
    // }


    // #VALIDAR USUARIO EXISTENTE
    // #---------------------------------------
    // public function validarUsuarioModel($datosModel,$tabla){

    //     $stmt = Conexion::conectar()->prepare("SELECT usuario FROM $tabla WHERE usuario = :usuario");

    //     $stmt->bindParam(":usuario",$datosModel,PDO::PARAM_STR);
    //     $stmt->execute();

    //     return $stmt->fetch();

    //     $stmt->close();
    // }

    // #VALIDAR EMAIL EXISTENTE
    // #---------------------------------------
    // public function validarEmailModel($datosModel,$tabla){

    //     $stmt = Conexion::conectar()->prepare("SELECT email FROM $tabla WHERE email = :email");

    //     $stmt->bindParam(":email",$datosModel,PDO::PARAM_STR);
    //     $stmt->execute();

    //     return $stmt->fetch();

    //     $stmt->close();
    // }


}
