create table permisos(

    codigo int(11) auto_increment,
    descripcion varchar(20) not null

);

create table rol(

    codigo int(11) auto_increment,
    descripcion varchar(20) not null
);

create table permiso_rol(

    codigo int(11) auto_increment,
    descripcion varchar(20) not null,
    accion varchar(15) not null,
    modulo varchar(20) not null,
    idRol int not null,
    idPermiso int not null

);

--tabla empleados

create table categoria(

    codigo int auto_increment,
    descripcion varchar(20) not null

);



--tabla estado