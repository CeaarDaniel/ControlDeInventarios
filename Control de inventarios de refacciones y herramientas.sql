use BEYONZ;

CREATE TABLE SCI_usuarios ( 
	nominaUsuario nvarchar(6) NOT NULL,
	nombreUsuario nvarchar(300) NULL,
	password nvarchar(200) NOT NULL,
	permisos varchar(100) NULL, /*Esta podria ser mas extensa, para poner permisos de cada seccion o funcion del sistema*/
	estatus varchar(3) NULL,

	CONSTRAINT PK_SCI_USUARIOS PRIMARY KEY (nominaUsuario)
);

create table SCI_proveedores(
  idProveedor int identity(1,1) NOT NULL,
  nombreProveedor nvarchar(200) NOT NULL,
  clasificacion nvarchar(50) NOT NULL,
  tipoTrabajo nvarchar(100) NULL,
  descripcionTrabajo nvarchar(100) NULL,
  observaciones nvarchar(100) NULL
  CONSTRAINT PK_SCI_PROVEEDORES PRIMARY KEY (idProveedor)
);

  /*
  Status de la selección del proveedor
  Aplica evaluación anual
  Fecha de Evaluación
  Proxima Fecha de Evaluación
 */

CREATE TABLE SCI_categoria(
  idCategoria int identity (1,1) NOT NULL,
  nombreCategoria nvarchar(50) NOT NULL,
  descripcionCategoria nvarchar(100) NULL, 

  CONSTRAINT PK_SCI_CATEGORIA PRIMARY KEY (idCategoria)
);

CREATE TABLE SCI_unidades(
	idUnidad int identity(1,1) NOT NULL, 
	nombreUnidad nvarchar (5) NOT NULL,  	  /*kg, Lt, M o Cm, Unidad, etc */
	descripcionUnidad nvarchar(100) NULL,  /*peso, Volumen, longitud, Cantidad, etc*/
	/*Agregar el valor de cambio de dolar*/
	CONSTRAINT PK_SCI_UNIDADES PRIMARY KEY (idUnidad)
);

create TABLE SCI_linea(
	idLinea int identity(1,1) NOT NULL, 
	nombreLinea nvarchar (100) NOT NULL,
	planMensual int NULL,
	piezasDia int NULL, /*Piesas por dia*/
	diasLaborales int NULL, 

	CONSTRAINT PK_SCI_LINEA PRIMARY KEY (idLinea)
		/*La utilidad de esta tabla es para tener un registro de los planes mensuales estos se */
);


create table SCI_catalogo(
  idItem nvarchar(100) NOT NULL,
  idCategoria_fk int NOT NULL,
  idUnidad_fk int NOT NULL,
  costoPesos float NOT NULL,
  costoDolares float NULL,
  existencia float NOT NULL, /*De momento son solo unidades, pero si se quiere inventariar todo tendria que manejarse como float asi que lo dejare como float por si me lo solicitan mas adelante*/ 
  nombreModeloItem nvarchar(200) NULL, 
  descripcionItem nvarchar(200) NULL,
  imagenItem nvarchar(300) NULL,
  tiempoEntrega nvarchar(50) NULL,
  paroProceso nvarchar(5) NULL, /*Implica un paro de proceso si faltara en una linea*/
  ciritco nvarchar(5) NULL, /*dejar en catalogo pero actualizar de acuerdo a los teimpo de entrega, las entradas, y el paro de proceso */

  CONSTRAINT PK_SCI_CATALOGO PRIMARY KEY (idItem),
  CONSTRAINT FK_SCI_CATALOGO_IDCATEGORIA FOREIGN KEY (idCategoria_fk) REFERENCES SCI_categoria(idCategoria),
  CONSTRAINT FK_SCI_CATALOGO_IDUNIDAD FOREIGN KEY (idUnidad_fk) REFERENCES	SCI_unidades(idUnidad)
);


create table SCI_entradas(
  facturaCompra nvarchar(200) NOT NULL, /*id de la factura de compra*/
  idItem_fk nvarchar(100) NOT NULL,
  idProveedor_fk int NULL,
  idCategoria_fk int NOT NULL, /*Holder, refaccion, herramienta*/
  idLinea_fk int NULL,  /*Este es por que se supone que se registran las entradas por linea y por item hay que indicar a que linea va el item ya que puede estar en varias lineas*/ 
  cantidad float NOT NULL,
  costoDolares float NULL, /*Si es por regreso de material podria colocarse de aceurdo al valor de la ultima salida*/
  valorCambio float NULL, /*Esta aun no se en donde ponerla*/
  costoPesos float NULL,
  costoTotal float NULL, /*Si es por regreso de material podria colocarse de aceurdo al valor de la ultima salida*/
  rackGabeta nvarchar (50) NULL,
  espacio nvarchar(50) NULL,
  /*Comentario o nota*/
  fechaCompra date NULL,
  fechaLlegada date NULL,
  fechaRegistroCompra date NULL, /*dejar oculta en la ventana*/
  nominaUsuario nvarchar(6) NULL, /*Solo registrar los datos de la persona que registra la entreada no de quien recibe*/

  CONSTRAINT PK_SCI_ENTRADAS PRIMARY KEY (facturaCompra),
  CONSTRAINT FK_SCI_ENTRADAS_IDITEM FOREIGN KEY (idItem_fk) REFERENCES SCI_catalogo(idItem),
  CONSTRAINT FK_SCI_ENTRADAS_IDPROVEEDOR FOREIGN KEY (idProveedor_fk ) REFERENCES SCI_proveedores(idProveedor),
  CONSTRAINT FK_SCI_ENTRADAS_IDCATEGORIA FOREIGN KEY (idCategoria_fk) REFERENCES SCI_categoria(idCategoria),
  CONSTRAINT FK_SCI_ENTRADAS_IDLINEA FOREIGN KEY (idLinea_fk) REFERENCES SCI_linea(idLinea)
);

create table SCI_salidas(
  folioSalida nvarchar(100) NOT NULL,
  idItem_fk nvarchar(100) NOT NULL,
  lineaSolicitante int NULL, /*De donde estan pidiendo el material*/
  rackGabeta nvarchar (50) NULL,
  espacio nvarchar(50) NULL,
  lineaSalida int, /*Este depende de la categoria si saldra del rack o de la linea */
  cantidad float NOT NULL,
  costoSalida float NOT NULL,
  costoTotal float NOT NULL,
  fechaSalida datetime,
  nominaSolicitante nvarchar(6),
  nominaUsuario nvarchar(6) NULL, /*nomina de quien registra*/
  /*Preguntar si puede que la linea solicitante sea una y que la liena de la que se sque la pieza sea otra diferente*/

  CONSTRAINT PK_SCI_SALIDAS PRIMARY KEY (folioSalida),
  CONSTRAINT FK_SCI_SALIDAS_IDITEM FOREIGN KEY (idItem_fk) REFERENCES SCI_catalogo(idItem),
);

create table SCI_inventario(
  idInventario int identity(1,1) NOT NULL,
  idItem_fk nvarchar(100) NOT NULL,
  idLinea_fk int NULL,
  idCategoria_fk int NOT NULL, 
  rackGabeta nvarchar (50) NULL,
  espacio nvarchar(50) NULL,
  proceso nvarchar(100) NULL,		/*Este lo guardare en una tabla ubicacion, ya que se usan para hacer el calculo del plan mensual de produccion*/
  tiempoVida nvarchar (50) NULL, /*ES necesario para poder guardarlo con comas para hacer un split y hacer el calculo del plan mensual con los valores ingresados en el proceso*/ 
  costoPesos float NOT NULL,
  costoDolares float NULL,
  costoTotal float NOT NULL,
  minimo int NULL,
  maximo int NULL,
  existencia float NOT NULL,
  puntoReorden int NULL,

  CONSTRAINT PK_SCI_INVENTARIO PRIMARY KEY (idInventario),

  CONSTRAINT FK_SCI_INVENTARIOS_IDITEM FOREIGN KEY (idItem_fk) REFERENCES SCI_catalogo(idItem),
  CONSTRAINT FK_SCI_INVENTARIOS_IDLINEA FOREIGN KEY (idLinea_fk) REFERENCES SCI_linea(idLinea),
  CONSTRAINT FK_SCI_INVENTARIOS_IDCATEGORIA FOREIGN KEY (idCategoria_fk) REFERENCES SCI_categoria(idCategoria),
); 
  /*
	La ubicacion hay que guardarla en otra tabla y hcaer los inventarios en base a la ubicacion y el item,
	asi podria solucionar lo del proceso. 
	Y podria dar opcion de tener inventarios tanto por linea como por ubicacion (rack o gabeta) independientemente de la categoria. 
  */


create table SCI_historialCostos(
  idHistorial int identity(1,1) NOT NULL,
  idItem_fk nvarchar(100) NOT NULL,
  idCategoria_fk int NOT NULL,
  costoPesos float NOT NULL,
  costoDolares float NULL,
  valorCambio float,
  fechaCompra date,
  cantidad float NOT NULL

  CONSTRAINT PK_SCI_HISTORIALCOSTOS PRIMARY KEY (idHistorial),
  CONSTRAINT FK_SCI_HISTORIALCOSTOS_IDITEM FOREIGN KEY (idItem_fk) REFERENCES SCI_catalogo(idItem),
  CONSTRAINT FK_SCI_HISTORIALCOSTOS_IDCATEGORIA FOREIGN KEY (idCategoria_fk) REFERENCES SCI_categoria(idCategoria),
);

create table SCI_ajusteInventario(
	 folioAjuste int IDENTITY(1,1) not null,
	 movimiento nvarchar(15) not null, /*Entrada o salida*/
	 motivo nvarchar(50) null,
	 comentario nvarchar(500),
	 idItem_fk nvarchar(100) NOT NULL,
	 cantidad float,
	 costoPesos float NOT NULL,
	 costoDolares float NULL, 
	 fechaAjuste datetime NOT NULL, 
	 nominaUsuario nvarchar(6) NOT NULL, /*Datos de quien registra el ajuste*/

	CONSTRAINT PK_SCI_AJUSTEINVENTARIO PRIMARY KEY (folioAjuste),
	CONSTRAINT FK_SCI_ FOREIGN KEY (idItem_fk) REFERENCES SCI_catalogo(idItem),
);


create table solicitudesRegresoMaterial();
/* create table ubicacion();*/




 select* from SCI_usuarios;
 select* from SCI_proveedores;
 select* from SCI_unidades;
 select* from SCI_linea;
 select* from SCI_catalogo;
 select* from SCI_categoria;
 select* from SCI_entradas;
 select* from SCI_salidas;
 select* from SCI_inventario;
 select* from SCI_historialCostos;
 select* from SCI_ajusteInventario;




Alter table SPA_usuarios add numero_de_nomina nvarchar(50) null, autorizado nvarchar(5) null ;