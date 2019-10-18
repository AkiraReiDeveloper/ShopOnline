<?php 
require_once "includes/conexion.php";
include "includes/topBar.php";

if(isset($_GET["cantidad"]) and (isset($_GET["nombre_producto"])) ){

	$cantidad = $_GET["cantidad"];
	$nombre_producto = $_GET["nombre_producto"];
	echo "<h1 class='text-center text-danger bg-danger'>Hay".$cantidad."disponibles del producto".$nombre_producto."</h1>";
}
?>
<div class="container">
	<table id="cart" class="table table-hover table-condensed">
    				<thead>
						<tr>
							<th>Product</th>
							<th>Price</th>
							<th>Quantity</th>
							<th class="text-center">Subtotal</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
					<?php 
					$conexion = ConexionDB::conexion();
					$total = 0;
					$cantidad_articulos = 0;
					foreach($_SESSION as $llave => $valor){
						if($valor > 0){

							if(substr($llave,0,9)=="producto_"){
								$longitud = strlen($llave)-9;
								$id_producto = substr($llave,9,$longitud);
								$sql = "select * from productos where id_productos=?";
								$resultado = $conexion->prepare($sql);
								$resultado->bindParam(1, $id_producto);
								if($resultado->execute()){
									while($registro = $resultado->fetch()){
										$nombre_producto=$registro["nombre"];
										$desc_corta = $registro["descripcion-corta"];
										$precio_producto = $registro["precio"];
										$sub_total = $precio_producto * $valor;
										$cantidad_articulo += $valor; 
									
					?>
						<tr>
							<td data-th="Product">
								<div class="row">
									<div class="col-sm-2 hidden-xs"><img src="http://placehold.it/100x100" alt="..." class="img-responsive"/></div>
									<div class="col-sm-10">
										<h4 class="nomargin"><?php echo $nombre_producto;?></h4>
										<p><?php echo $desc_corta; ?></p>
									</div>
								</div>
							</td>
							<td data-th="Price">&#36;<?php echo $precio_producto ?></td>
							<td data-th="Quantity">
								<input type="number" class="form-control text-center" value=<?php echo $cantidad_articulos ?>>
							</td>
							<td data-th="Subtotal" class="text-center"><?php echo $sub_total ?></td>
							<td class="actions" data-th="">
								<button class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>
								<button class="btn btn-danger btn-sm" onClick="location.href='funcion_carro.php?remover=<?php echo $id_producto ?>'" ><i class="fa fa-trash-o"></i></button>								
							</td>
						</tr>
						<?php
						}
						$_SESSION["total_articulos"]+=$cantidad_articulos;
						$_SESSION["total_a_pagar"]=$total+=$subTotal;	
					}
				}
			}
		}
						?>
						</tbody>
					<tfoot>
						<!--<tr class="visible-xs">
							<td class="text-center"><strong>Total 1.99</strong></td>
					
						</tr>-->
						<tr>
							<td><a href="#" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
							<td colspan="2" class="hidden-xs"></td>
							<td class="hidden-xs text-center"><strong>Total $150.00</strong></td>
							<td><a href="https://www.sandbox.paypal.com/webapps/shoppingcart?mfid=1546373779156_cb91e3a2b2dc7&flowlogging_id=cb91e3a2b2dc7#/checkout/shoppingCart" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>
						</tr>
					</tfoot>
				</table>
</div>
