<?php

   abstract class classConexao{

        #Conexao com o bd.
        protected function conectaDB(){

            try{
               $Con=new mysqli("localhost", "root", "", "crud");
                return $Con;
            }catch (Exception $Erro) {
                return $Erro->getMessage();
                ;
            }
        }
}