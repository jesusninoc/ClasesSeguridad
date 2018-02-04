<?PHP
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $usuario = "pedro";
    $pass= "123456";
    if(! ($_POST['username'] == $usuario && $_POST['password'] == $pass) )
    {
        Echo "<html>";
        Echo "<title>MUY mal</title>";
        Echo "<b>Acceso denegado</b>";        
        
        session_destroy() ;
        
        return false;
    }
    else {
    
        Echo "<html>";
        Echo "<title>MUY bien</title>";
        Echo "<b>Acceso concedido</b>";
 
        session_destroy();    
 
        return true;
    }
}
?>
