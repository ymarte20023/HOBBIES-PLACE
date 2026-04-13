<?php 
    /*Objetivos: 2. Crear una clase para manejar los datos de los usuarios */

    //Clase usuario: para manejar los datos de los usuarios
    //El objeto usuario es el dueño de todas sus acciones relacionadas (loguearse, registrarse, cambiar clave)
    class User { 
        // Atributos
        // 1. Conexión BD
        private $db;

        //2. Datos del usuario.
        // Atributos alienados a la BD (Para guardar los datos del usuario una vez logueado)
        // Propiedades privadas (Encapsulamiento)
        private $id;
        private $username;
        private $full_name;
        private $email;
        private $password;
        private $rol;

        //Funciones
        //0. Conexión BD                                       //¿Porque usamos metodo constructor para la conexión a la BD?:
        public function __construct($dbConnection) {  // El constructor recibe la conexión (Inyección de Dependencias)
            $this->db = $dbConnection;
        }

        // Acciones para manejar los datos del usuario (registro, login, etc.)
        //1. Función para registrar un nuevo usuario
        public function register($username, $email, $password, $full_name) {
            // El hash se genera aquí, en el modelo (Regla de negocio)
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        
            $sql = "INSERT INTO usuarios (username, email, password, full_name) VALUES (?, ?, ?, ?)";
            $stmt = $this->db->prepare($sql);
            return $stmt->execute([$username, $email, $hashedPassword, $full_name]);
        }

        //2. Función para iniciar sesión
        public function login($username, $password) {
            // Aqui va la logica de SELECT y password_verify()
            // CORRECCIÓN: Seleccionamos los campos correctos de tu BD
            $sql = "SELECT id_user, username, password, full_name, rol FROM usuarios WHERE username = ?";
            $stmt = $this->db->prepare($sql);
            $stmt->execute([$username]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user && password_verify($password, $user['password'])) {
                // Si la contraseña es correcta, guardamos los datos del usuario en el objeto
                $this->id = $user['id_user'];
                $this->username = $user['username'];
                $this->full_name = $user['full_name'];
                $this->rol = $user['rol']; // Guardamos el rol del usuario para futuras verificaciones de permisos
                return true;
            }
            return false;   
        }

        // --- GETTERS (Para que el Controlador pueda leer los datos protegidos) ---
        public function getId() {
            return $this->id;
        }

        // GETTERS necesario para usar el rol en el controlador
        public function getRol() { 
            return $this->rol; 
        }
        public function getFullName() { 
            return $this->full_name; 
            }
    }
?>