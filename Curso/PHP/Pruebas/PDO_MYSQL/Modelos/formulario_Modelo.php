<?

require_once "Modelos/conexion.php";

class modeloFormularios{

    #registro
    static public function mdlRegistro($tabla, $datos){
        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(correo, nombre, apellido, password) VALUES (:correo, :nombre, :apellido, :password)");

        $stmt -> bindParam(":correo", $datos["correo"],PDO::PARAM_STR);
        $stmt -> bindParam(":nombre", $datos["nombre"],PDO::PARAM_STR);
        $stmt -> bindParam(":apellido", $datos["apellido"],PDO::PARAM_STR);
        $stmt -> bindParam(":password", $datos["password"],PDO::PARAM_STR);
        if($stmt->execute()){
            return "ok";
        }else{
            print_r(Conexion::conectar()->errorInfo());
        }
        $stmt -> closeCursor();
        $stmt = null;
    }
    #Sellecionar Registros
    static public function mdlSeleccionarRegistros($tabla, $item, $valor){
        if($item == null && $valor == null){
            $stmt = Conexion::conectar()->prepare("SELECT *,DATE_FORMAT(fecha '%d/%m/%y') FROM $tabla");
            $stmt -> execute();
            return $stmt -> fetchAll();
        }else{
            $stmt = Conexion::conectar()->prepare("SELECT *,DATE_FORMAT(fecha '%d/%m/%y') FROM $tabla WHERE $item = :$item");
            $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);
            $stmt -> execute();
            return $stmt -> fetch();
        }
        
    }
    #Actualizar Registros.
    static public function mdlactualizarRegistro($tabla, $datos){
        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET correo=:correo, nombre=:nombre, apellido=:apelllido, password=:password WHERE id = :id");

        $stmt -> bindParam(":correo", $datos["correo"], PDO::PARAM_STR);
        $stmt -> bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt -> bindParam(":apellido", $datos["apellido"], PDO::PARAM_STR);
        $stmt -> bindParam(":password", $datos["password"], PDO::PARAM_STR);
        $stmt -> bindParam(":id", $datos["id"], PDO::PARAM_INT);
        if($stmt->execute()){
            return "ok";
        }else{
            print_r(Conexion::conectar()->errorInfo());
        }
        $stmt -> closeCursor();
        $stmt = null;
    }
    #Eliminar registro
    static public function mdlEliminarRegistro($tabla, $valor){
        $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");
        $stmt -> bindParam(":id", $valor, PDO::PARAM_INT);
        if($stmt -> execute()){
            return "ok";
        }else{
            print_r(Conexion::conectar()->errorInfo());
        }
    }
}
?>