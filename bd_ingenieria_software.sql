CREATE DATABASE bd_ingenieria_software;
use bd_ingenieria_software;

create table tbl_tipo_recursos(
id				int primary key auto_increment,
tipo_recurso	varchar(20),
estado			bit(1) default 1,
constraint uni_tipo_recurso unique (tipo_recurso)
) engine = 'InnoDB' collate = 'utf8mb4_general_ci';

create table tbl_origenes(
id			int  primary key auto_increment,
origen		varchar(20),
estado		bit(1) default 1,
constraint uni_origen unique (origen)
) engine = 'InnoDB' collate = 'utf8mb4_general_ci';

create table tbl_categoria_temas(
id			int primary key auto_increment,
categoria	varchar(30),
estado		bit(1) default 1,
constraint uni_cat unique (categoria)
) engine = 'InnoDB' collate = 'utf8mb4_general_ci';

create table tbl_temas(
id			int primary key auto_increment,
id_cat		int,
titulo		varchar(30),
descripcion	varchar(1000),
nivel		int,
estado		bit(1) default 1,
constraint uni_tit unique (titulo),
constraint fk_id_cat foreign key (id_cat) references tbl_categoria_temas (id)
) engine = 'InnoDB' collate = 'utf8mb4_general_ci';


create table tbl_recursos(
id					int primary key auto_increment,
id_tema				int,
id_tipo_recurso 	int,
id_tipo_origen		int,
direccion			varchar(255),
estado				bit(1) default 1,
constraint fkid_tema foreign key (id_tema) references tbl_temas (id),
constraint fk_id_tipo_recurso foreign key (id_tipo_recurso) references tbl_tipo_recursos (id),
constraint fk_id_tipo_origen foreign key (id_tipo_origen) references tbl_origenes (id)
)  engine = 'InnoDB' collate = 'utf8mb4_general_ci';

insert into tbl_tipo_recursos values
(null, 'audio', default),
(null, 'video', default),
(null, 'otros', default),
(null, 'pdf', default);


insert into tbl_origenes values
(null, 'archivo', default),
(null, 'enlace', default);

insert into tbl_categoria_temas values
(null, 'Normas, estándares y herraminetas para calidad de software', default),
(null, 'Verificación y validación de la documentación del análisis de los requerimientos', default),
(null, 'Verificación y validación de la documentación del diseño del sistema', default),
(null, 'Factores críticos de éxito para el desarrollo del software', default);

insert into tbl_temas values
(null, 1, 'Importancia de la ingeniería de software', 'La ingeniería de software es una disciplina que se encarga del diseño, desarrollo y mantenimiento del software. Comprender qué es la ingeniería de software y sus objetivos es fundamental para aquellos interesados en esta área.  Sus objetivos son muy diversos, pero podemos destacar los siguientes más importantes: Crear programas informáticos que satisfagan las necesidades de la sociedad y empresas. Guiar y coordinar el desarrollo de una programación difícil. Intervenir en el ciclo de vida de un producto.', 1 ,1),
(null, 1, 'Calidad de Sotware', 'La calidad en el software está en relación directa con el cumplimiento de los requerimientos formulados por el usuario, de tal forma que si un programa no cumple con alguno de estos requerimientos, es un software de baja calidad. Aunque el criterio de cumplimiento de los requerimientos es un factor importante, no es el único, ya que existen condiciones implícitas que el software debe cumplir como son eficiencia, seguridad, integridad, consistencia, entre otras.', 1, 1),
(null, 1, 'Herramientas de la ingeniería de software', 'El desarrollo de software, es una de las ramas de la ingeniería que se enfoca principalmente a lo que es la cración de sistemas informáticos. El desarrollo de software se compone por diversas etapas que dependen precisamente de qué es lo que se está llevando acabo, cada una de las etapas cuenta con distintas "herramientas de desarrollo de software".', 1, 1);

alter table tbl_temas modify titulo varchar (100);


insert into tbl_recursos values 
(null, 1, '2', '2', 'https://www.youtube.com/watch?v=EoNUtg46W7M', 1),
(null, 2, '2', '2', 'https://www.youtube.com/watch?v=qbnBw9SUz_U', 1);

select * from tbl_recursos;