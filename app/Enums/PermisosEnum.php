<?php

namespace App\Enums;

enum PermisosEnum: string
{
    // Para gestion de usuarios
    case USUARIO_VER = 'usuario_ver';
    case USUARIO_CREAR = 'usuario_crear';
    case USUARIO_ACTUALIZAR = 'usuario_actualizar';
    // Para gestion de roles
    case ROL_VER = 'rol_ver';
    case ROL_CREAR = 'rol_crear';
    case ROL_ACTUALIZAR = 'rol_actualizar';
    // Para gestion de libros
    case LIBRO_VER = 'libro_ver';
    case LIBRO_CREAR = 'libro_crear';
    case LIBRO_ACTUALIZAR = 'libro_actualizar';
    // Para gestion de autores
    case AUTOR_VER = 'autor_ver';
    case AUTOR_CREAR = 'autor_crear';
    case AUTOR_ACTUALIZAR = 'autor_actualizar';
    // Para gestion de categorias
    case CATEGORIA_VER = 'categoria_ver';
    case CATEGORIA_CREAR = 'categoria_crear';
    case CATEGORIA_ACTUALIZAR = 'categoria_actualizar';
    // Para gestion de lotes de libros
    case LOTE_VER = 'lote_ver';
    case LOTE_CREAR = 'lote_crear';
    case LOTE_ACTUALIZAR = 'lote_actualizar';
}
