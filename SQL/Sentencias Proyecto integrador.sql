 CREATE TABLE habitantes (
  id int(10) NOT NULL,
  nombre varchar(45) NOT NULL,
  apellidos varchar(45) NOT NULL,
  tipo_documento varchar(23) NOT NULL,
  numero_identificacion varchar(10) NOT NULL,
  telefono_fijo varchar(7) NOT NULL,
  telefono_celular varchar(10) NOT NULL,
  correo varchar(45) NOT NULL,
  fecha_registro date NOT NULL,
  estado_vigencia varchar(10) NOT NULL 
); 

CREATE TABLE apartamento (
  id int(10) NOT NULL,
  bloque varchar(1) NOT NULL,
  numero_apartamento varchar(3) NOT NULL
  );

CREATE TABLE detalle_habitantes (
  id int(10) NOT NULL,
  tipo_habitante varchar(45) NOT NULL,
  habitantes_id int (10) NOT NULL,
  apartamento_id int(10) NOT NULL
  
);

CREATE TABLE empleados (
  id int(10) NOT NULL,
  nombre varchar(45) NOT NULL,
  apellidos varchar(45) NOT NULL,
  numero_identificacion varchar(10) NOT NULL,
  direccion varchar(45) NOT NULL,
  telefono varchar(10) NOT NULL,
  correo varchar(45) NOT NULL,
  cargo varchar(45) NOT NULL,
  dotacion varchar(45) NOT NUll,
  fecha_registro date NOT NULL
  
);

CREATE TABLE consejo_directivo (
  id int(10) NOT NULL,
  cargo varchar(45) NOT NULL,
  cedula_suplente varchar(10) NOT NULL,
  estado_en_consejo varchar(45) NOT NULL,
  fecha_inicio date NOT NULL,
  habitantes_id int(10) NOT NULL
); 

CREATE TABLE visitantes (
  id int(10) NOT NULL,
  nombre varchar(45) NOT NULL,
  apellidos varchar(45) NOT NULL,
  tipo_documento varchar(23) NOT NULL, 
  numero_identificacion varchar(10) NOT NULL,
  temperatura varchar(4) NOT NULL,
  fecha_visita date NOT NULL,
  apartamento_id int(10) NOT NULL
  
);


ALTER TABLE habitantes
  ADD PRIMARY KEY (id);

ALTER TABLE detalle_habitantes
   ADD PRIMARY KEY (id);

ALTER TABLE detalle_habitantes
   ADD KEY fk_habitantes_id (habitantes_id);

ALTER TABLE detalle_habitantes
   ADD KEY fk_apartamento_id (apartamento_id);

ALTER TABLE empleados
   ADD PRIMARY KEY (id);

ALTER TABLE consejo_directivo
   ADD PRIMARY KEY (id);

ALTER TABLE consejo_directivo

 ADD KEY fk_habitantes_id (habitantes_id);


ALTER TABLE apartamento
   ADD PRIMARY KEY (id);


ALTER TABLE visitantes
  ADD PRIMARY KEY (id);

ALTER TABLE visitantes
ADD KEY fk_apartamento_id (apartamento_id);

ALTER TABLE habitantes
  MODIFY id int(10) NOT NULL AUTO_INCREMENT;

ALTER TABLE empleados
  MODIFY id int(10) NOT NULL AUTO_INCREMENT;

ALTER TABLE apartamento
  MODIFY id int(10) NOT NULL AUTO_INCREMENT;


ALTER TABLE visitantes
  MODIFY id int(10) NOT NULL AUTO_INCREMENT;

ALTER TABLE Detalle_habitantes
   MODIFY id int(10) NOT NULL AUTO_INCREMENT;

ALTER TABLE consejo_directivo
   MODIFY id int(10) NOT NULL AUTO_INCREMENT;

ALTER TABLE detalle_habitantes
  ADD CONSTRAINT fk_habitantes_id FOREIGN KEY (habitantes_id) REFERENCES habitantes (id);

ALTER TABLE detalle_habitantes
  ADD CONSTRAINT fk_apartamento_id FOREIGN KEY (apartamento_id) REFERENCES apartamento (id);

ALTER TABLE visitantes
ADD CONSTRAINT fk_apartamento_id FOREIGN KEY (apartamento_id) REFERENCES apartamento (id);

ALTER TABLE consejo_directivo
ADD CONSTRAINT fk_habitantes_id FOREIGN KEY (habitantes_id) REFERENCES habitantes (id);



   
