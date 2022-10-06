<?php
function obtener_hora(){
    return date("d:i a");
}
echo "Que hora son...\n";
echo "Son las ".obtener_hora();
?>