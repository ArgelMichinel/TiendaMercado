<tr >
    <th  scope="row"><?=($i+1)?></th>
    <td ><?=$productos[$i]['nombre']?></td>
    <td >$<?=number_format($productos[$i]['precio'])?></td>
    <td ></td>
    <td ><?=$productos[$i]['descripcion']?></td>
    <td ><?=$productos[$i]['cantidad']?></td>
    <td ><img 
        alt="<?=$productos[$i]['nombre']?>" width="70" height="80"
        src="<?=$productos[$i]['img']?>"></td>
    <td >
        <div  class="wrapper d-flex justify-content-end">
            <a href="./add_edit.php?id_prod=<?=$productos[$i]['id_producto']?>"><i 
            class="fa fa-pencil-square-o" style="font-size: 32px;"></i></button>
            <button type="button" class="btn btn-outline-danger ms-4"><i 
            class="fa fa-trash"></i></button></div>
    </td>
</tr>