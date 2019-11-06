<?php 
require_once "includes/conexion.php";
include "includes/topBar.php";
?>
<div class="container">
<?php
if(isset($_GET["cantidad"]) and (isset($_GET["nombre_producto"])) ){
	$cantidad = $_GET["cantidad"];
	$nombre_producto = $_GET["nombre_producto"];
	echo "<h1 class='text-center text-white bg-danger'>Hay ".$cantidad." disponibles del producto".$nombre_producto."</h1>";
}
?>


<form id="carrito" acction="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_cart">
<input type="hidden" name="business" value="AkiraReiBusiness@gmail.com">
<input type="hidden" name="upload" value="1">
<input type="hidden" name="currency_code" value="MXN">
<input type="hidden" name="cancel_return" value="http://localhost/~multiplataforma7/ShopOnline/">
<input type="hidden" name="return" value="http://localhost/~multiplataforma7/ShopOnline/success.php">

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
					$subTotal = 0;
					//variable de paypal
					$item_name=1;
					$item_number=1;
					$amount=1;
					$quantity=1;
					/********/
					if(!isset($_SESSION["total_a_pagar"])){
						$_SESSION["total_a_pagar"] = $total;
					}
					if(!isset($_SESSION["total_articulos"])){
						$_SESSION["total_articulos"] = $cantidad_articulos;
					}
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
										$cantidad_articulos += $valor;
									
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
								<input type="number" min="0" class="form-control text-center" value=<?php echo $valor ?>>
							</td>
							<td data-th="Subtotal" class="text-center"><?php echo $sub_total ?></td>
							<td class="actions" data-th="">

								<div class="col-sm-3">
									<a class="btn btn-success btn-sm" href="funcion_carro.php?agregar=<?php echo $id_producto;?>"><i class="fa fa-plus"></i></a>
									<a class="btn btn-warning btn-sm" href="funcion_carro.php?remover=<?php echo $id_producto;?>"><i class="fa fa-minus"></i></a>
									<a class="btn btn-danger btn-sm" href='funcion_carro.php?eliminar=<?php echo $id_producto;?>' ><i class="fa fa-trash-o"></i></a>								
								</div>
							</td>
						</tr>
						<input type="hidden" name="item_name_<?php echo $item_name?>" value="<?php echo $nombre_producto ?>">
						<input type="hidden" name="item_number_<?php echo $item_number?>" value="<?php echo $id_producto ?>">
						<input type="hidden" name="amount_<?php echo $amount?>" value="<?php echo $precio_producto ?>">
						<input type="hidden" name="quantity_<?php echo $quantity?>" value="<?php echo $valor ?>">
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
							<td><a href="index.php" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
							<td colspan="2" class="hidden-xs"></td>
							<td class="hidden-xs text-center"><strong></strong></td>
							<td><a href="https://www.sandbox.paypal.com/webapps/shoppingcart?mfid=1546373779156_cb91e3a2b2dc7&flowlogging_id=cb91e3a2b2dc7#/checkout/shoppingCart" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>
						</tr>
					</tfoot>
				</table>
</div>
