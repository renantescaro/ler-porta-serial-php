

SELECT * FROM sensor;
SELECT * FROM sensor_entradas ;

INSERT INTO sensor(nome) VALUES('potenciometro_1');
INSERT INTO sensor_entradas(valor,data_hora,sensor_id) VALUES(10, '2020-03-22 17:31:00', 1);

CREATE TABLE sensor(
	id int auto_increment,
	nome varchar(100),

	primary key(id)
);

CREATE TABLE sensorEntrada(
	id int auto_increment,
	
	valor float,
	dataHora datetime,
	sensorId int,
	
	constraint fk_sensor_id foreign key (sensorId) references sensor(id),
	primary key(id)
);

