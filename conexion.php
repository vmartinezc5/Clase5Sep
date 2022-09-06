<?php

    class conexion 
    {
        function Conectar()
        {
          $mysqli = new mysqli("bpuma9ikiuenlvqfo1yq-mysql.services.clever-cloud.com","uyzphq2vqomdjuyz","5LVCLOPQBvOZOlsDJJbf","bpuma9ikiuenlvqfo1yq");
          
          if($mysqli->connect_errno)
          {
            echo "Error Al conectar a la Base de datos   ".$mysqli->connect_errno;
          } 
          return $mysqli; 
        }
    }