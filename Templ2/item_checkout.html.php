<tr>
    <td class="pro-img"><img class="rounded" src="<?=$carrito[$i]["ruta"]?>"></td>
    <td class="pro-name text-start">
        <span style="font-size: 15px;"><?=$carrito[$i]["nombre"]?></span>
    </td>
    <td class="pro-price" style="font-size: 15px;">$<?=number_format($carrito[$i]["precio"])?></td>
    <td class="pro-qty" style="font-size: 15px;">1</td>
    <td class="pro-total fw-500" style="font-size: 15px;">$<?=number_format($carrito[$i]["precio"]*$carrito[$i]["cantidad"])?></td>
</tr>